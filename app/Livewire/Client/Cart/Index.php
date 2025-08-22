<?php

namespace App\Livewire\Client\Cart;

use App\Models\Cart;
use App\Repositories\client\cart\ClientCartRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public $cartItems = [];
    public $invoice = [];
    public $outOfStock = false;

    private $repository;

    public function boot(ClientCartRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }


    public function updateCartQuantity($itemId, $action)
    {
        $this->outOfStock = $this->repository->updateCartQuantity($itemId, $action);
    }

    public function render()
    {
        //بار گذاری محصولات سبد خرید
        $data = $this->repository->getCartItemsWithCalculations();

        $this->cartItems = $data['cartItems'];
        $this->invoice = $data['invoice'];

        return view('livewire.client.cart.index')->layout('layouts.client.app-v2');
    }
}
