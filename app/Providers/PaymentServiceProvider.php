<?php

namespace App\Providers;

use App\Contracts\PaymentGateWayInterface;
use App\Models\PaymentMethod;
use Exception;
use Illuminate\Support\ServiceProvider;

class PaymentServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(PaymentGateWayInterface::class, function () {
            $activePayment = PaymentMethod::query()->where('is_active', true)->first();
            $gateWayClass = 'App\\Services\\PaymentGateWay\\' . $activePayment->name;

            if (!$activePayment || !class_exists($gateWayClass)) {
                throw new \Exception('Active payment gateway not found or invalid claas!');
            }

            return new $gateWayClass;

        });
    }

}
