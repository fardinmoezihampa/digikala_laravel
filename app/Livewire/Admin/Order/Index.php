<?php

namespace App\Livewire\Admin\Order;

use App\Models\Order;
use App\Repositories\admin\AdminOrderRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '';

    private $repository;

    public function boot(AdminOrderRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function changeStatus(Order $order, $value)
    {
        //dd($orderId, $event);
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
        $this->dispatch('success', 'عملیات با موفقیت انجام شد!.');
    }


    public function render()
    {
        $ordersQuery = $this->repository->getOrderWithFilters($this->search, $_GET['status'] ?? 'all');
        $orders = $ordersQuery->paginate(10);
        $this->repository->transformQuery($orders);

        return view('livewire.admin.order.index', [
            'orders' => $orders,
        ])->layout('layouts.admin.app');
    }
}







