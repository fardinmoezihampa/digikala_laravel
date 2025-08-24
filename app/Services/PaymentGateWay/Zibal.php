<?php

namespace App\Services\PaymentGateWay;

use App\Contracts\PaymentGateWayInterface;
use App\Models\Payment;
use App\Models\PaymentMethod;
use Exception;

class Zibal implements PaymentGateWayInterface
{

    public function request($amount, $orderNumber)
    {
        $zibal = new \App\Classes\zibal();

        $parameters = array(
            "merchant" => config('services.zibal.merchent'),//required
            "callbackUrl" => route('client.payment.callback'),//required
            "amount" => $amount * 10,//required * 10 for rial payment
            "orderId" => $orderNumber,//optional
            "mobile" => "09120000000",//optional for mpg
        );

        $response = $zibal->postToZibal('request', $parameters);

        if ($response->result == 100) {

            $startGateWayUrl = "https://gateway.zibal.ir/start/" . $response->trackId;
            return redirect($startGateWayUrl);
        } else {
            throw new Exception('Error code:' . $response->result . '-message:' . $response->message);
        }
    }

    public function verify($request)
    {
        //dd($_GET['orderId']);
        //dd($request->orderId);
        //dd($request->refNumber);

        session()->forget(['paymentSuccess','paymentError']);
        $payment = Payment::query()->where('order_number', $request->orderId)->firstOrFail();

        $zibal = new \App\Classes\zibal();

        if ($_GET['success'] == 1) {
            echo "شناسه سفارش: " . $_GET['orderId'] . "<br>";

            //start verfication
            $parameters = array(
                "merchant" => config('services.zibal.merchent'),//required
                "trackId" => $_GET['trackId'],//required
            );

            $response = $zibal->postToZibal('verify', $parameters);

            if ($response->result == 100) {

                //update payment table
                $this->updatePayment($payment, $request);
                //update order table
                $this->updateOrder($payment);

                $refNumber = $response->refnumber ?? 'نامشخص';
                session()->flash('paymentSuccess', "پرداخت با موفقیت انجام شد.شماره تراکنش شما :{$refNumber}");

            } elseif ($response->result == 201) {
                session()->flash('paymentError', 'تراکنش تکراری است.');
            }
        } else {
            session()->flash('paymentError', 'پرداخت با شکست مواجه شد.');
        }
    }

    public function updatePayment($payment, $request)
    {
        $payment->update([
            'status' => 'completed',
            'refNumber' => $request->refNumber,
            'cardNumber' => $request->cardNumber,
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
        return PaymentMethod::query()->where('name', '=', 'Zibal')->pluck('id')->first();
    }

}
