<?php

namespace App\Livewire\Admin\Product;

use App\Models\Category;
use App\Models\Product;
use App\Models\Seller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Livewire\Component;

class Create extends Component
{
    public $categories = [];
    public $sellers = [];
    public $name;
    public $slug;
    public $productId;

    public function mount()
    {
        $this->categories = Category::all();
        $this->sellers = Seller::query()->select('id', 'shop_name')->get();
        //dd($this->sellers);
    }

    public function updatedName()
    {
        //dd('test');
        $this->slug = Str::slug($this->name, '-', null);
    }

    public function submit($formData, Product $product)
    {

        if (isset($formData['featured'])) {
            $formData['featured'] = true;
        } else {
            $formData['featured'] = false;
        }
        //dd($formData);

        $validator = Validator::make($formData, [
            'name' => 'required|string',
            'slug' => 'required|string',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'price' => 'required|integer',
            'discount' => 'nullable|integer',
            'stock' => 'required|integer',
            'featured' => 'nullable|boolean',
            'discount_duration' => 'nullable|string',
            'sellerId' => 'nullable|exists:sellers,id',
            'categoryId' => 'required|exists:categories,id',
        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت ورودی اشتباه است.',
            '*.integer' => 'این فیلد باید از نوع عددی باشد.',
            '*.min' => 'حداقل تعداد کارکتر :50',
            '*.boolean' => 'افزدون به کالای ویژه را انتخاب کنید!',
            'categoryId.exists' => 'دسته بندی نامعتبر است.',
            'sellerId.exists' => 'فروشنده نامعتبر است.',
        ]);
        $validator->validate();
        $this->resetValidation();
        $product->submit($formData, $this->productId);
        $this->reset();
        $this->dispatch('success', 'عملیات با موفقیت انجام شد!');
    }

    public function render()
    {

        return view('livewire.admin.product.create')->layout('layouts.admin.app');
    }
}
