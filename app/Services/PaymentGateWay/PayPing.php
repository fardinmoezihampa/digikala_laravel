<?php

namespace App\Services\PaymentGateWay;

use App\Contracts\PaymentGateWayInterface;

class PayPing implements PaymentGateWayInterface
{

    public function request($amount)
    {
        dd('payping not complated');
    }

    public function verify($request)
    {

    }

    public function getPaymentMethodId()
    {

    }
}
