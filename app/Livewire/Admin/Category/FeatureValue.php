<?php

namespace App\Livewire\Admin\Category;

use App\Models\CategoryFeature;
use App\Models\CategoryFeatureValue;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class FeatureValue extends Component
{

    use WithPagination;

    public $featureName;
    public $featureId;
    public $valueId;
    public $value;

    public function mount(CategoryFeature $categoryFeature)
    {
        //dd($categoryFeature);
        $this->featureName = $categoryFeature->name;
        $this->featureId = $categoryFeature->id;
    }

    public function submit($FormData, CategoryFeatureValue $categoryFeatureValue)
    {
        $validator = Validator::make($FormData, [
            'value' => 'required|string|max:30',
        ],
            [
                '*.required' => 'فیلد ضروری است.',
                '*.string' => 'فرمت اشتباه است!',
                '*.max' => 'حداکثر تعداد کارکتر :30',
            ]);

        $validator->validate();
        $this->resetValidation();
        $categoryFeatureValue->submit($FormData, $this->valueId, $this->featureId);
        $this->reset('value');
        $this->dispatch('success', 'عملیات  با موفقیت انجام شد!');
    }

    public function edit($valueId)
    {
        $featureValue = CategoryFeatureValue::query()->where('id', $valueId)->first();

        if ($featureValue) {
            $this->value = $featureValue->value;
            $this->valueId = $featureValue->id;
            $this->featureId = $featureValue->category_feature_id;
            //$this->featureId = $featureValue->featureId;
        }
    }

    public function delete($valueId)
    {
        CategoryFeatureValue::query()->where('id',$valueId)->delete();
        $this->dispatch('success', 'عملیات حذف با موفقیت انجام شد !');
    }
    public function render()
    {
        $featureValues = CategoryFeatureValue::query()
            ->where('category_feature_id', $this->featureId)
            ->paginate(10);
        return view('livewire.admin.category.feature-value.index', [
            'featureValues' => $featureValues,
        ])->layout('layouts.admin.app');
    }
}
