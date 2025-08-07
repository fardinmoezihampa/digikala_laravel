<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use App\Models\CategoryFeature;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Features extends Component
{
    use WithPagination;

    public $categoryName;
    public $categoryId;
    public $featureId;
    public $name;

    public function mount(Category $category)
    {
        //dd($category);
        $this->categoryName = $category->name;
        $this->categoryId = $category->id;
    }

    public function submit($FormData, CategoryFeature $categoryFeature)
    {
        //dd($FormData);
        $validator = Validator::make($FormData, [
            'name' => 'required|string|max:50',
        ],
            [
                '*.required' => 'فیلد ضروری است.',
                '*.string' => 'فرمت اشتباه است!',
                '*.max' => 'حداکثر تعداد کارکتر :50',
            ]);

        $validator->validate();
        $this->resetValidation();
        $categoryFeature->submit($FormData, $this->categoryId, $this->featureId);
        $this->reset('name');
        $this->reset('featureId');
        $this->dispatch('success', 'عملیات  با موفقیت انجام شد!');
    }

    public function edit($featureId)
    {
        $categoryFeature = CategoryFeature::query()->where('id', $featureId)->first();
        if ($categoryFeature) {
            $this->name = $categoryFeature->name;
            $this->featureId = $categoryFeature->id;
            $this->categoryId = $categoryFeature->category_id;
        }
    }

    public function delete($featureId)
    {
        $categoryFeature = CategoryFeature::query()->where('id', $featureId)->first();

        if ($categoryFeature->values()->exists()) {
            $this->dispatch('error', 'این ویژگی دارای زیر مقادیر است و نمی توان آنرا حذف کرد!');
            return;
        }
        $categoryFeature->delete();
        $this->dispatch('success', 'عملیات حذف با موفقیت انجام شد !');
    }


    public function render()
    {
        //dd($this->categoryId);

        $categoryFeatures = CategoryFeature::query()
            ->where('category_id', $this->categoryId)
            ->paginate(10);
        return view('livewire.admin.category.features.index', [
            'categoryFeatures' => $categoryFeatures
        ])->layout('layouts.admin.app');;
    }
}
