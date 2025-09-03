<?php

namespace App\Livewire\Seller\Dashboard;

use App\Models\OrderItem;
use App\Repositories\seller\SellerOrderRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public $totalOrderAmount = 0;
    public $totalOrders = 0;
    public $recentOrders = [];

    private $repository;

    public function boot(SellerOrderRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function mount()
    {
        $data = $this->repository->getOrderItemsResult();

        $this->totalOrderAmount = $data->sum('price');
        $this->totalOrders = $data->count();
        $this->recentOrders = $data->sortByDesc('created_at')->take(5);
    }

    public function render()
    {
        return view('livewire.seller.dashboard.index')->layout('layouts.seller.app');
    }
}
