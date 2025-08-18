<?php

namespace App\Livewire\Client\Auth;

use App\Repositories\client\ClientAuthRepository;
use App\Repositories\client\ClientAuthRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Livewire\Component;

class Index extends Component
{

    public $deliveryId;

    private $repository;


    public function boot(ClientAuthRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }


    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }


    public function handleProviderCallback()
    {
        $repository = new ClientAuthRepository();
        $gmailUser = Socialite::driver('google')->stateless()->user();
        $repository->checkUser($gmailUser);
        return redirect()->route('client.home');
    }

    public function clientLogout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('client.auth.index');
    }

    public function render()
    {
        return view('livewire.client.auth.index')->layout('layouts.client.app-auth');
    }
}
