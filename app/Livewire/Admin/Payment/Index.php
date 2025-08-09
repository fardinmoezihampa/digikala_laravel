<?php

namespace App\Livewire\Admin\Payment;

use App\Models\PaymentMethod;
use App\Repositories\admin\AdminPaymentRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;

    public $name;
    public $merchentId;

    public $paymentId;

    private $repository;

    public function boot(AdminPaymentRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }


    public function submit($formData)
    {
        $validator = Validator::make($formData, [
            'name' => 'required|string|max:50',
            'mechentId' => 'nullable',
        ],
            [
                '*.required' => 'فیلد ضروری است',
                '*.string' => '! فرمت اشتباه است',
                '*.max' => 'حداکثر تعداد کارکترها:50',
            ]);
        $validator->validate();
        $this->resetValidation();
        $this->repository->submit($formData, $this->paymentId);
        $this->reset();
        $this->dispatch('success', 'عملیات  با موفقیت انجام شد!');
    }

    public function edit($paymentId)
    {
        $payment = PaymentMethod::query()->where('id', $paymentId)->first();
        if ($paymentId) {
            $this->name = $payment->name;
            $this->paymentId = $payment->id;
            $this->merchentId = $payment->merchent_id;
        }
    }

    public function delete($paymentId)
    {
        PaymentMethod::query()->where('id', $paymentId)->delete();
        $this->dispatch('success', 'عملیات حذف با موفقیت انجام شد.');

    }
    public function render()
    {
        $payments = PaymentMethod::query()->paginate(10);
        return view('livewire.admin.payment.index', [
            'payments' => $payments
        ])->layout('layouts.admin.app');
    }
}
