<?php

namespace App\Services\PaymentGateWay;

use App\Contracts\PaymentGateWayInterface;
use App\Models\Payment;
use App\Models\PaymentMethod;
use Exception;

class Zarinpal implements PaymentGateWayInterface
{


    public function request($amount, $orderNumber)
    {
        $zarinpal = new \App\Classes\Zarinpal();

        $parameters = array(
            "merchant_id" => config('services.zarinpal.merchant'), // در فایل config/services.php
            "callback_url" => route('client.payment.callback'),
            "description" => "پرداخت سفارش شماره {$orderNumber}",
            "amount" => $amount * 10,//required * 10 for rial payment
            "orderId" => $orderNumber,//optional
            "mobile" => "09190000000",//optional for mpg
        );

        //dd($parameters['merchant']);


        $response = $zarinpal->postToZarinpal("request", $parameters);

        if (isset($response['data']['code']) && $response['data']['code'] == 100) {

            $authority = $response['data']['authority'];
            //$gatewayUrl = "https://www.zarinpal.com/pg/StartPay/" . $authority;
            $gatewayUrl = "https://www.zarinpal.com/pg/StartPay/{$authority}/" . ($amount * 10);

            $payment = Payment::query()->where('order_number', $orderNumber)->firstOrFail();
            $this->updatePayment($payment, $response['data']);

            return redirect($gatewayUrl);
        } else {
            $error = $response['errors']['message'] ?? 'خطای نامشخص';
            throw new Exception('Zarinpal Error: ' . $error);
        }
    }

    public function verify($request)
    {

        session()->forget(['paymentSuccess', 'paymentError']);
        $payment = Payment::query()->where('order_number', $request->Authority)->firstOrFail();

        $zarinpal = new \App\Classes\Zarinpal();

        if ($request->Status == "OK") {
            echo "شناسه سفارش: " . $_GET['Authority'] . "<br>";

            //start verfication
            $parameters = [
                "merchant_id" => config('services.zarinpal.merchant'),
                "amount" => $payment->amount * 10,
                "order_number" => $request->Authority
            ];

            $response = $zarinpal->postToZarinpal("verify", $parameters);

            if (isset($response['data']['code']) && $response['data']['code'] == 100) {
                $refId = $response['data']['ref_id'];

                $this->updatePayment($payment, $response['data']);
                $this->updateOrder($payment);

                session()->flash('paymentSuccess', "پرداخت موفق بود. کد پیگیری: {$refId}");
            } elseif (isset($response['data']['code']) && $response['data']['code'] == 101) {
                session()->flash('paymentError', 'این تراکنش قبلاً تأیید شده است.');
            } else {
                session()->flash('paymentError', 'پرداخت ناموفق بود.');
            }
        } else {
            session()->flash('paymentError', 'پرداخت توسط کاربر لغو شد.');
        }
    }

    public function updatePayment($payment, $data)
    {

        $payment->update([
            'status' => 'completed',
            'refNumber' => $data['ref_id'] ?? null,
            'cardNumber' => $data['card_pan'] ?? null,
            'order_number' => $data['authority'] ?? $payment->authority,
        ]);
    }

    public function updateOrder($payment)
    {
        $payment->order()->update([
            'status' => 'completed',
        ]);
    }

    public function getPaymentMethodId()
    {
        return PaymentMethod::query()->where('name', '=', 'Zarinpal')->pluck('id')->first();
    }
}
