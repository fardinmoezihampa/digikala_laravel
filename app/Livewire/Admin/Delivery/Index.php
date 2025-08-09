<?php

namespace App\Livewire\Admin\Delivery;

use App\Models\deliveryMethod;
use App\Repositories\admin\AdminDeliveryRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $name;
    public $price;

    public $deliveryId;

    private $repository;

    public function boot(AdminDeliveryRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }


    public function submit($formData)
    {
        $validator = Validator::make($formData, [
            'name' => 'required|string|max:50',
            'price' => 'required|numeric',
        ],
            [
                '*.required' => 'فیلد ضروری است',
                '*.string' => '! فرمت اشتباه است',
                '*.max' => 'حداکثر تعداد کارکترها:50',
                'price.numeric' => 'قیمت باید بصورت عددی باشد.'
            ]);
        $validator->validate();
        $this->resetValidation();
        $this->repository->submit($formData, $this->deliveryId);
        $this->reset();
        $this->dispatch('success', 'عملیات  با موفقیت انجام شد!');
    }

    public function edit($deliveryId)
    {
        $delivery = deliveryMethod::query()->where('id', $deliveryId)->first();
        if ($deliveryId) {
            $this->deliveryId = $delivery->id;
            $this->name = $delivery->name;
            $this->price = $delivery->price;
        }
    }

    public function delete($deliveryId)
    {
        deliveryMethod::query()->where('id', $deliveryId)->delete();
        $this->dispatch('success', 'عملیات حذف با موفقیت انجام شد.');

    }

    public function render()
    {
        $deliveries = deliveryMethod::query()->paginate(10);
        return view('livewire.admin.delivery.index', [
            'deliveries' => $deliveries,
        ])->layout('layouts.admin.app');
    }
}
