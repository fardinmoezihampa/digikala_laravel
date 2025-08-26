<?php

namespace App\Repositories\admin;

use App\Models\Order;

class AdminOrderRepository implements AdminOrderRepositoryInterface
{

    public function getOrderDetails($order)
    {
        $orderDetails = $order->load([
            'orderItems.product:id,name,price,p_code',
            'orderItems.product.coverImage:id,path,is_cover,product_id',
            'payment',
            'paymentMethod:id,name',
            'deliveryMethod:id,name',
            'address:id,address,country_id,state_id,city_id,postal_code,mobile',
            'address.country:id,name',
            'address.state:id,name',
            'address.city:id,name',
        ]);


        $parts = explode('-', $orderDetails->order_number);
        $orderDetails->order_number = $parts[2] ?? null;
        $orderDetails->statusPaymentColor = $this->getStatusColor($orderDetails->payment->status);
        return $orderDetails;
    }

    public function getOrderWithFilters($search = null, $status = null)
    {

        $query = Order::query()
            ->with('user', 'payment');

        if ($search) {
            $query->where('order_number', 'like', '%' . $search . '%')
                ->orWhereHas('user', function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%')
                        ->orwhere('mobile', 'like', '%' . $search . '%')
                        ->orwhere('email', 'like', '%' . $search . '%');
                });
        }

        if ($status && $status != 'all') {
            $query->where('status', '=', $status);
        }
        return $query->latest();
    }

    public function transformQuery($orders)
    {
        return $orders->getCollection()->transform(function ($order) {
            $parts = explode('-', $order->order_number);
            $order->order_number = $parts[2] ?? null;

            $order->statusColor = $this->getStatusColor($order->status);
            $order->statusPaymentColor = $this->getStatusColor($order->payment->status);
            return $order;
        });
    }

    public function getStatusColor($status)
    {
        switch ($status) {
            case 'pending':
                return 'primary';
            case 'processing':
                return 'info';
            case 'completed':
                return 'success';
            case 'canceled':
                return 'danger';
        }
    }
}
