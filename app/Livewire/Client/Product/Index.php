<?php

namespace App\Livewire\Client\Product;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    public $product;

    public function mount($p_code)
    {
        $product = Product::query()
            ->where('p_code', '=', $p_code)
            ->select('id', 'name', 'price', 'discount', 'discount_duration', 'stock', 'featured', 'seller_id', 'category_id', 'p_code')
            ->with('images', 'coverImage')
            ->firstOrFail();

        if ($product) {
            $discountAmount = $product->discount ? ($product->price * $product->discount / 100) : 0;
            $product->finalPrice = $product->price - $discountAmount;
        }
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.client.product.index');
    }
}
