<?php

namespace App\Livewire\Admin\Slider;

use App\Models\Slider;
use App\Repositories\admin\AdminSliderRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;

    public $title;
    public $image;
    public $link;

    private $repository;

    public function boot(AdminSliderRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function submit($formData)
    {

        if ($this->image) {
            $formData['image'] = $this->image;
        }

        $validator = Validator::make($formData, [
            'title' => 'required|string|max:50',
            'link' => 'required|url',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp,gif|max:10240',//10MB
        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است !',
            'image.mimes' => 'فرمت های مجاز تصویر : jpg,jpeg,png,webp !',
            'image.max' => 'سایز تصویر حداکثر : ! 10MB',
        ]);
        $validator->Validate();
        $this->resetValidation();

        $this->repository->submit($formData, $this->image);

        $this->dispatch('success', 'عملیات با موفقیت انجام شد .');
        $this->reset();

    }


    public function delete(Slider $slider)
    {
        $this->repository->delete($slider);
        $this->dispatch('success', 'عملیات حذف با موفقیت انجام شد !');
    }

    public function changeStatus(Slider $slider)
    {
        $this->repository->changeStatus($slider);
        $this->dispatch('success', 'عملیات با موفقیت انجام شد !');
    }

    public function render()
    {
        $sliders = Slider::query()->get();
        return view('livewire.admin.slider.index', [
            'sliders' => $sliders,
        ])->layout('layouts.admin.app');
    }
}
