<?php

namespace App\Livewire\Admin\Product;

use App\Models\CategoryFeature;
use App\Models\Product;
use App\Models\ProductFeatureValue;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Features extends Component
{

    public $features = [];
    public $productId;

    public function mount(Product $product)
    {

        $categoryID = $product->category_id;
        $this->productId = $product->id;
        $this->features = CategoryFeature::query()->where('category_id', $categoryID)->get();

    }

    public function submit($formData, ProductFeatureValue $productFeatureValue)
    {

        $featureIds = [];
        $featureValueIds = [];

        foreach ($formData as $value) {
            list($featureId, $featureValueId) = explode('_', $value);
            $featureIds[] = $featureId;
            $featureValueIds[] = $featureValueId;
        }
        $data = [
            'feature_ids' => $featureIds,
            'feature_value_ids' => $featureValueIds,
        ];

        $validator = Validator::make($data, [
            'feature_ids' => 'required|array',
            'feature_ids.*' => 'required|exists:category_features,id',
            'feature_value_ids' => 'required|array',
            'feature_value_ids.*' => 'required|exists:category_feature_values,id',
        ], [
            '*.required' => 'فیلد اجباری',
            '*.array' => 'نوع اطلاعات باید آرایه باشد.',
            'feature_ids.*.exists' => 'ویژگی نامعتبر است!',
            'feature_value_ids' => 'مقادیر ویژگی نامعتبر است !',
        ]);

        //dd($formData, $featureIds, $featureValueIds, $data);

        $validator->validate();
        $this->resetValidation();
        $productFeatureValue->submit($formData, $this->productId);
        $this->redirect(route('admin.product.index'));
        session()->flash('success', 'عملیات ثبت ویژگی با موفقیت انجام شد.');


    }

    public function render()
    {
        return view('livewire.admin.product.features')->layout('layouts.admin.app');
    }
}
