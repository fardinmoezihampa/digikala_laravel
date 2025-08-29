<?php

namespace App\Repositories\admin;

use App\Models\Order;
use App\Models\Payment;

class AdminTransactionRepository implements AdminTransactionRepositoryInterface
{

    public function getTransactionWithFilters($search = null, $status = null)
    {

        $query = Payment::query()
            ->with('order')
            ->latest();

        if ($search) {
            $query->where('order_number', 'like', '%' . $search . '%')
                ->orwhere('refNumber', 'like', '%' . $search . '%')
                ->orwhere('cardNumber', 'like', '%' . $search . '%')
                ->orWhereHas('order.user', function ($query) use ($search) {
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

    public function transformQuery($transactions)
    {
        return $transactions->getCollection()->transform(function ($item) {
            $parts = explode('-', $item->order_number);
            $item->order_number = $parts[2] ?? null;

            $item->statusColor = $this->getStatusColor($item->status);
            $item->statusPaymentColor = $this->getStatusColor($item->status);
            return $item;
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
