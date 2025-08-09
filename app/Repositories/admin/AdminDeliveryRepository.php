<?php

namespace App\Repositories\admin;

use App\Models\deliveryMethod;

class AdminDeliveryRepository implements AdminDeliveryRepositoryInterface
{
    public function submit($formData, $deliveryId)
    {
        deliveryMethod::query()->updateOrCreate(
            [
                'id' => $deliveryId,
            ],
            [
                'name' => $formData['name'],
                'price' => $formData['price'],
            ]
        );
    }
}
