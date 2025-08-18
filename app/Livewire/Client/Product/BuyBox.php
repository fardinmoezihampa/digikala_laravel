<?php

namespace App\Livewire\Client\Product;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BuyBox extends Component
{
    public $price;
    public $discount;
    public $finalPrice;
    public $productId;
    public $inCart = false;

    public function mount()
    {
        $this->inCart = Cart::query()
            ->where([
                'product_id' => $this->productId,
                'user_id' => Auth::id(),
            ])->exists();
    }

    public function addToCart()
    {
        Cart::query()->create([
            'product_id' => $this->productId,
            'user_id' => Auth::id(),
            'quantity' => 1,
        ]);

        sleep(1);
        $this->inCart = true;

        $this->dispatch('add-to-cart', productId: $this->productId);

    }

    public function render()
    {
        return view('livewire.client.product.buy-box');
    }
}
