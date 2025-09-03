<?php

namespace App\Livewire\Seller\Order;

use App\Models\Order;
use App\Repositories\admin\AdminOrderRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Details extends Component
{
    public $orderDetails;
    public $statusColor;

    private $repository;

    public function boot(AdminOrderRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function mount(Order $order)
    {
        $this->orderDetails = $this->repository->getOrderDetails($order);


        $this->statusColor = $this->repository->getStatusColor($this->orderDetails->status);
    }

    public function changeStatus(Order $order, $value)
    {

        $validator = Validator::make(['status' => $value, 'id' => $order->id], [
            'id' => 'required|exists:orders,id',
            'status' => 'required|in:pending,processing,completed,canceled',
        ], [
            '*.required' => 'فیلد ضروری است',
            'status.in' => 'مقدار وارده شده اشتباه است!',
            'id.exists' => 'سفارش نامعتبر است!',
        ]);
        $validator->validate();
        $this->resetValidation();

        $order->update(['status' => $value]);
        $this->statusColor = $this->repository->getStatusColor($order->status);
        $this->dispatch('success', 'عملیات با موفقیت انجام شد!.');
    }


    public function render()
    {
        return view('livewire.seller.order.details')->layout('layouts.seller.app');
    }
}
