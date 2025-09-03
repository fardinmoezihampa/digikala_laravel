<?php

use App\Livewire\Seller\Auth\Index as authIndex;
use App\Livewire\Seller\Dashboard\Index as dashboardIndex;
use Illuminate\Support\Facades\Route;
use App\Livewire\Seller\Product\Index as productIndex;
use App\Livewire\Seller\Product\Create;
use App\Livewire\Seller\Product\Features as productFeatures;
use App\Livewire\Seller\Product\Content;
use App\Livewire\Seller\Order\Index as orderIndex;
use App\Livewire\Seller\Order\Details as orderDetails;


Route::name('seller.')->group(function () {

    Route::get('/auth', authIndex::class)->name('auth.login')->middleware('guest:seller');
    Route::get('/logout', [authIndex::class, 'logout'])->name('logout')->middleware('auth:seller');

    Route::middleware('auth:seller')->group(function () {
        Route::get('/dashboard', dashboardIndex::class)->name('dashboard.index');
        Route::get('/product', productIndex::class)->name('product.index');
        Route::get('/product/create', Create::class)->name('product.create');
        Route::get('/product/feature/{product}', productFeatures::class)->name('product.features');
        Route::get('/product/content/{product}', Content::class)->name('product.content');


        Route::get('/order', orderIndex::class)->name('order.index');
        Route::get('/order/{order}', orderDetails::class)->name('order.details');

    });
});
