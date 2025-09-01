<?php

use Illuminate\Support\Facades\Route;
use Artesaos\SEOTools\Facades\SEOTools as SEO;

Route::prefix('admin')->group(function () {
    require __DIR__ . '/admin.php';
});


    require __DIR__ . '/client.php';


Route::prefix('seller')->group(function () {
    require __DIR__ . '/seller.php';
});

/*use Livewire\Attributes\On;

Route::get('/test-on', function() {
    $obj = new On('ping');
    dd($obj);
});

use Livewire\Features\SupportEvents\BaseOn;

Route::get('/test-baseon', function() {
    $obj = new BaseOn('ping');
    dd($obj);
});*/



/*Route::get('/seo-test', function () {
    SEO::setTitle('Test Title');
    SEO::setDescription('Test Description');
    return view('welcom');
});*/



