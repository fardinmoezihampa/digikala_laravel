<?php

namespace App\Classes;

class Zarinpal
{
    private $baseUrl = "https://api.zarinpal.com/pg/v4/payment/";

    function postToZarinpal($path, $parameters)
    {
        $url = $this->baseUrl . $path . ".json";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($parameters));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        return json_decode($response, true);
    }

    function statusCodes($code)
    {
        switch ($code) {
            case 100: return "تراکنش با موفقیت تأیید شد.";
            case 101: return "تراکنش قبلاً تأیید شده است.";
            default:  return "خطا در پرداخت یا کد نامعتبر.";
        }
    }
}
