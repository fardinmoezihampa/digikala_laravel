<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use App\Repositories\admin\AdminProductRepositoryInterface;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    private $repository;

    public function boot(AdminProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function delete(Product $product)
    {
        $this->repository->removeProduct($product);
    }

    public function render()
    {
        $products = Product::query()->with('category', 'coverImage')->latest()->paginate(10);
        return view('livewire.admin.product.index', [
            'products' => $products,
        ])->layout('layouts.admin.app');
    }
}
