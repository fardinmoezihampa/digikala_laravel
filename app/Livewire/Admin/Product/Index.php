<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use App\Models\SeoItem;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function delete($productId)
    {
        //delete product from product table
        //
        $product = Product::query()->where('id', $productId)->first();
        $product->delete();

        //delete imagesItem from productImage table

        SeoItem::query()->where('ref_id', $productId)->delete();
    }

    public function render()
    {
        $products = Product::query()->with('category', 'coverImage')->latest()->paginate(3);
        return view('livewire.admin.product.index', [
            'products' => $products,
        ])->layout('layouts.admin.app');
    }
}
