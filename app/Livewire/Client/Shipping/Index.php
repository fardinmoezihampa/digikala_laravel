<?php

namespace App\Livewire\Client\Shipping;

use App\Contracts\PaymentGateWayInterface;
use App\Models\Address;
use App\Models\Cart;
use App\Models\City;
use App\Models\Coupons;
use App\Models\deliveryMethod;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Models\Product;
use App\Models\State;
use App\Repositories\client\Shipping\ClientShippingRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Livewire\Component;

class Index extends Component
{

    public $deliveries = [];
    public $deliveryMethodId;

    public $addressList = [];
    public $provinces = [];
    public $cities = [];
    public $addressId = 0;

    //Edit Address properties

    public $address;
    public $province;
    public $city;
    public $postalCode;
    public $mobile;


    //invoice properties

    public $totalProductCount = 0;
    public $totalOriginalPrice = 0;
    public $totalDiscount = 0;
    public $totalDiscountedPrice = 0;
    public $showDiscountCode = false;

    //هزینه ارسال
    public $deliveryPrice = 0;
    //---coupon ---کد تخفیف
    public $discountCodeAmount = 0;
    //قیمت نهایی
    public $totalAmount = 0;

    private $repository;

    public function boot(ClientShippingRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function mount()
    {
        //dd(Session::get('invoiceFromCart'));

        if (Session::get('invoiceFromCart')) {
            $invoice = Session::get('invoiceFromCart');

            $this->totalProductCount = $invoice['totalProductCount'];
            $this->totalOriginalPrice = $invoice['totalOriginalPrice'];
            $this->totalDiscount = $invoice['totalDiscount'];
            $this->totalDiscountedPrice = $invoice['totalDiscountedPrice'];

        }

        $this->deliveries = DeliveryMethod::all();
        //$this->deliveryPrice = $this->deliveries->pluck('price')->first();
        $this->deliveryPrice = $this->deliveries->first()->price;
        $this->deliveryMethodId = $this->deliveries->first()->id;

        $addressesList = Address::query()->where('user_id', Auth::id())->latest()->get();
        $this->addressId = $addressesList->first()->id;


        $this->totalAmountForPayment($this->totalDiscountedPrice, $this->deliveryPrice, $this->discountCodeAmount);

    }

    public function totalAmountForPayment($totalDiscountedPrice, $deliveryPrice, $discountCodeAmount)
    {
        $this->totalAmount = ($totalDiscountedPrice + $deliveryPrice) - $discountCodeAmount;
    }

    public function getAddressId($addressId)
    {
        $this->addressId = Address::query()->where([
            'user_id' => Auth::id(),
            'id' => $addressId,
        ])->first()->id;

    }

    public function changeDeliveryPrice($deliveryId)
    {
        $this->deliveryMethodId = $deliveryId;
        $newDeliveryPrice = $this->deliveryPrice = deliveryMethod::query()->where('id', $deliveryId)->pluck('price')->first();
        $this->totalAmountForPayment($this->totalDiscountedPrice, $newDeliveryPrice, $this->discountCodeAmount);
    }


    public function submit($formData)
    {

        $validator = Validator::make($formData, [
            'address' => 'required|string|min:10|max:100',
            'province' => 'required|exists:states,id',
            'city' => 'required|exists:cities,id',
            'postalCode' => ['required', 'regex:/^[1-9][0-9]{9}$/'],
            'mobile' => ['required', 'regex:/^09[0-9]{9}$/'],
        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است !',
            '*.max' => 'حداکثر تعداد کاراکترها : 100',
            '*.min' => 'حداکثر تعداد کاراکترها : 10',
            'province.exists' => 'استان نامعتبر است .',
            'city.exists' => 'شهر نامعتبر است .',
            'postalCode.regex' => 'کد پستی باید یک عدد ۱۰ رقمی باشد که با صفر شروع نشود.',
            'mobile.regex' => 'شماره موبایل باید با 09 شروع شود و دقیقاً 11 رقم باشد.',
        ]);

        $validator->validate();
        $this->resetValidation();

        Address::query()->updateOrCreate(
            [
                'id' => $this->addressId
            ],
            [
                'mobile' => $formData['mobile'],
                'address' => $formData['address'],
                'state_id' => $formData['province'],
                'city_id' => $formData['city'],
                'country_id' => 1,
                'postal_code' => $formData['postalCode'],
                'user_id' => Auth::id()
            ]
        );

        $this->dispatch('close-modal');
    }

    public function getProvinces($type)
    {
        if ($type == 'add') {
            $this->reset();
        }
        $this->provinces = State::all();
    }

    public function getCity($value)
    {
        $this->cities = City::query()->where('state_id', $value)->get();
    }

    public function editAddress($addressId)
    {
        $this->addressId = $addressId;

        $addressDetails = Address::query()->where('id', $addressId)->first();
        if ($addressDetails) {
            $this->address = $addressDetails->address;
            $this->postalCode = $addressDetails->postal_code;
            $this->mobile = $addressDetails->mobile;

            $this->getProvinces('edit');
            $this->province = $addressDetails->state_id;

            $this->getCity($this->province);
            $this->city = $addressDetails->city_id;
        }

    }

    public function checkDiscountCode($formData)
    {

        $validator = Validator::make($formData, [
            'code' => 'required|string|exists:coupons,code|min:4|max:6',

        ], [
            'code.required' => 'فیلد ضروری است.',
            'code.string' => 'فرمت اشتباه است !',
            'code.max' => 'حداکثر تعداد کاراکترها : 6',
            'code.min' => 'حداکثر تعداد کاراکترها : 4',
            'code.exists' => 'کد تخفیف وارد شده معتبر نیست.',

        ]);
        $validator->validate();
        $this->resetValidation();


        $code = Coupons::query()->where('code', $formData['code'])->first();
        $this->applyDiscount($code);

    }

    public function applyDiscount($code)
    {
        if (!$code->is_active || (Carbon::parse($code->expires_at)->isPast())) {
            session()->flash('error', 'این کد تخفیف معتبر نیست یا منقضی شده است.');
            return;
        }
        if (($this->totalAmount < $code->min_purchase) || $code->limit <= 0) {
            session()->flash('error', 'شرایط استفاده از این کد تخفیف برقرار نیست.');
            return;
        }
        $this->discountCodeAmount = $discount = $code->type == 'percent' ? ($this->totalDiscountedPrice * $code->value) / 100 : $code->value;
        $this->totalAmountForPayment($this->totalDiscountedPrice, $this->deliveryPrice, $discount);
        $newLimit = $code->limit - 1;
        Coupons::where('id', $code->id)->update(['limit' => $newLimit,]);

        $this->showDiscountCode = true;
        session()->flash('success', 'کد تخفیف با موفقیت اعمال شد.');
    }

    //------------------- Operation before submit payment------------------

    public function checkQuantity($cartItems)
    {
        $this->repository->checkQuantity($cartItems);
    }

    public function createOrder($orderNumber, $paymentMethodId)
    {
        return $this->repository->createOrder($paymentMethodId, $orderNumber, $this->totalAmount, $this->deliveryMethodId, $this->addressId);
    }

    public function createOrderItems($cartItems, $orderId)
    {
        $this->repository->createOrderItems($cartItems, $orderId);
    }

    public function createPayment($orderId, $orderNumber)
    {
        $this->repository->createPayment($orderId, $orderNumber, $this->totalAmount);
    }

    public function submitOrderBeforePayment($cartItems, $paymentMethodId, $orderNumber)
    {
        $this->repository->submitOrderBeforePayment($cartItems, $paymentMethodId, $orderNumber, $this->totalAmount, $this->deliveryMethodId, $this->addressId);
    }

    //-------------------End Of Operation before submit payment-----------------
    public function submitOrder(PaymentGateWayInterface $paymentGateWay)
    {
        $this->repository->submitOrder($paymentGateWay, $this->totalAmount, $this->deliveryMethodId, $this->addressId);
    }


    public function render()
    {
        $this->addressList = Address::query()->where('user_id', Auth::id())->latest()->get();
        //$this->addressId = $addressList->first()->id;

        return view('livewire.client.shipping.index')->layout('layouts.client.app-v2');
    }
}
