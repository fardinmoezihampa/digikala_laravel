<?php

namespace App\Livewire\Seller\Order;

use App\Models\OrderItem;
use App\Repositories\seller\SellerOrderRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '';

    private $repository;

    public function boot(SellerOrderRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function changeStatus(OrderItem $order, $value)
    {
        //dd($orderId, $event);
        $validator = Validator::make(['status' => $value, 'id' => $order->id], [
            'status' => 'required|in:pending,processing,completed,canceled',
            'id' => 'required|exists:order_items,id',
        ], [
            '*.required' => 'فیلد ضروری است',
            'status.in' => 'مقدار وارده شده اشتباه است!',
            'id.exists' => 'سفارش نامعتبر است!',
        ]);
        $validator->validate();
        $this->resetValidation();

        $order->update(['status' => $value]);
        $this->dispatch('success', 'عملیات با موفقیت انجام شد!.');
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
    public function render()
    {
        $ordersQuery = $this->repository->getOrderWithFilters($this->search, $_GET['status'] ?? 'all');
        $orders = $ordersQuery->paginate(2)->through(function ($item) {
            return [
                'id' => $item->id,
                'quantity' => $item->quantity,
                'created_at' => $item->created_at,
                'price' => $item->price,
                'status' => $item->status,
                'statusColor' => $this->getStatusColor($item->status),
                'product' => $item->product,
                'user' => $item->order->user,
                'address' => $item->order->address,
            ];
        });

        return view('livewire.seller.order.index', [
            'orders' => $orders,
        ])->layout('layouts.seller.app');
    }
}







