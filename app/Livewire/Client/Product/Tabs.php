<?php

namespace App\Livewire\Client\Product;

use App\Models\Product;
use App\Repositories\client\product\ClientProductRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Tabs extends Component
{
    public $productId;
    public $name;
    public $sellerName;
    public $shortDescription;
    public $longDescription;
    public $activeTab = 0;
    public $productFeartures = [];
    public $ProductReviews = [];

    public $validator;
    public $submitSuccessAlert = false;

    public $title;
    public $comment;

    public $positiveInput = '';
    public $positiveItems = [];

    public $negativeInput = '';
    public $negativeItems = [];


    private $repository;

    public function boot(ClientProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }


    public function mount()
    {
        app()->setLocale('fa');
        $this->changeTab(1);
    }

    public function changeTab($tabNumber)
    {
        $this->activeTab = $tabNumber;
        $product = Product::query()->where('id', $this->productId);
        if ($tabNumber == 1) {
            $this->shortDescription = $product->pluck('short_description')->first();
        } elseif ($tabNumber == 2) {
            $this->longDescription = $product->pluck('long_description')->first();
        } elseif ($tabNumber == 3) {
            $this->getProductFeatures($this->productId);
        } elseif ($tabNumber == 4) {
            $this->getProductReviews($this->productId);
        }
    }

    public function getProductFeatures($productId)
    {
        $this->productFeartures = $this->repository->getProductFeatures($productId);
    }

    public function getProductReviews($productId)
    {
        $this->ProductReviews = $this->repository->getProductReviews($productId);

    }

    // --------addPositiveItem()---------
    /*public function addPositiveItem()
    {
        $this->Validate([
            'positiveInput' => 'required|min:3|max:50',
        ], [
            'positiveInput.required' => 'فیلد الزامیست',
            'positiveInput.min' => 'حداقل باید 3 کارکتر باشد .',
            'positiveInput.max' => 'حداکثر باید 50 کارکتر باشد.',
        ]);
        $this->positiveItems[] = $this->positiveInput;
        $this->positiveInput = '';

        //return response()->json($this->positiveItems);
    }*/

    // --------addNegativeItem()---------
    /* public function addNegativeItem()
     {
         $this->Validate([
             'negativeInput' => 'required|min:3|max:50',
         ], [
             'negativeInput.required' => 'فیلد الزامیست',
             'negativeInput.min' => 'حداقل باید 3 کارکتر باشد .',
             'negativeInput.max' => 'حداکثر باید 50 کارکتر باشد.',
         ]);
         $this->negativeItems[] = $this->negativeInput;
         $this->negativeInput = '';

         //return response()->json($this->negativeItems);
     }*/


    // --------removePositiveItem()---------
    /*public function removePositiveItem($index)
    {
        array_splice($this->positiveItems, $index, 1);

    }*/

    // --------removeNegativeItem()---------
    /* public function removeNegativeItem($index)
     {
         array_splice($this->negativeItems, $index, 1);
         //return response()->json($this->negativeItems);
     }*/

    public function removeItem($type, $index)
    {
        $itemsField = $type === 'positive' ? 'positiveItems' : 'negativeItems';
        array_splice($this->{$itemsField}, $index, 1);

    }


    public function addItem($type)
    {
        $inputField = $type === 'positive' ? 'positiveInput' : 'negativeInput';
        $itemsField = $type === 'positive' ? 'positiveItems' : 'negativeItems';

        $this->Validate([
            $inputField => 'required|min:3|max:50',
        ], [
            $inputField . '.required' => 'فیلد الزامیست',
            $inputField . '.min' => 'حداقل باید 3 کارکتر باشد .',
            $inputField . '.max' => 'حداکثر باید 50 کارکتر باشد.',
        ]);

        $this->{$itemsField}[] = $this->{$inputField};
        $this->{$inputField} = '';

    }


    public function submitReview($formData)
    {
        $validator = Validator::make($formData, [
            'title' => 'required|string|min:10|max:100',
            'comment' => 'required|string|min:10|max:250',
        ],
            [
                '*.required' => 'فیلد ضروری است.',
                '*.string' => 'فرمت اشتباه است!',
                '*.min' => 'حداقل تعداد کارکتر :10',
                '*.max' => 'حداکثر تعداد کارکتر :250',
            ]);
        $validator->validate();
        $this->resetValidation();

        $this->repository->submitReview($formData, $this->productId, $this->positiveItems, $this->negativeItems);
        $this->submitSuccessAlert = true;
        $this->reset('title', 'comment', 'positiveInput', 'negativeInput');
        $this->positiveItems = [];
        $this->negativeItems = [];

    }

    public function setVote($status, $reviewId)
    {
        if (Auth::check()) {
            sleep(1);
            $this->repository->setVote($status, $reviewId);
            $this->getProductReviews($this->productId);
        } else {
            return redirect()->route('client.auth.index');
        }
    }

    public function render()
    {
        return view('livewire.client.product.tabs');
    }
}
