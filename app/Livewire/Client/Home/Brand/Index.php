<?php

namespace App\Livewire\Client\Home\Brand;

use Livewire\Component;

class Index extends Component
{
    public function placeholder()
    {
        return view('Layouts.client.placeholders.first-page.banner-skeleton');
    }

    public function render()
    {
        //sleep(1);
        return view('livewire.client.home.brand.index');
    }
}
