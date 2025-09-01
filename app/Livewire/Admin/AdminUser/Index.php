<?php

namespace App\Livewire\Admin\AdminUser;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Index extends Component
{
    public $roles = [];
    public $permissions = [];

    public $name;
    public $email;
    public $mobile;
    public $selectedRoles = [];
    public $selectedPermissions = [];


    public function mount()
    {
        $this->roles = Role::all();
        $this->permissions = Permission::all();
    }

    public function submit($formData)
    {

        $formData['selectedRoles'] = $this->selectedRoles;
        $formData['selectedPermissions'] = $this->selectedPermissions;
        $validator = Validator::make($formData, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email',
            'mobile' => 'required|regex:/^09[0-9]{9}$/|unique:admins,mobile',
            'selectedRoles' => 'required|array',
            'selectedRoles.*' => 'exists:roles,id',
            'selectedPermissions' => 'required|array',
            'selectedPermissions.*' => 'exists:permissions,id',
        ],
            [
                '*.required' => 'فیلد ضروری است.',
                'name.string' => 'فرمت اشتباه است.',
                'name.max' => 'حداکثر تعدادکارکتر :255',
                'email.email' => 'ایمیل نامعتبر است.',
                'mobile.regex' => 'شماره موبایل نامعتبر است.',
                'selectedRoles.exists' => 'این نقش معتبر نیست.',
                'selectedPermissions.exists' => 'این دسترسی معتبر نیست.',

            ]);

        $validator->validate();
        $this->resetValidation();

        $password = $this->generatePassword();

        $admin = Admin::query()->create([
            'name' => $formData['name'],
            'email' => $formData['email'],
            'mobile' => $formData['mobile'],
            'password' => Hash::make($password),
        ]);

        //اتصال نقش ها و دسترسی ها به آدمین
        $admin->roles()->sync($this->selectedRoles);
        $admin->permissions()->sync($this->selectedPermissions);

        session()->flash('message', 'ادمین با موفقیت ثبت شد!پسورد: ' . $password);

    }

    public function generatePassword($length = 12)
    {
        //کارکترهای مختلف
        $numbers = '0123456789';
        $lowercase = 'abcdefghijklmnopqrstuvwxyz';
        $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $symbols = '@!#$%^&*()_+=-[]{}<>?,.';

        //حداقل یک عدد-یک حرف کوچک-یک حرف بزرگ و یک سیمبول اضافه می کنیم.
        $password = [
            $numbers[random_int(0, strlen($numbers) - 1)],
            $lowercase[random_int(0, strlen($lowercase) - 1)],
            $uppercase[random_int(0, strlen($uppercase) - 1)],
            $symbols[random_int(0, strlen($symbols) - 1)],
        ];

        //کارکترهای تصادفی دیگر اضافه می کنیم
        $allCharacters = $numbers . $lowercase . $uppercase . $symbols;
        while (count($password) < $length) {
            $char = $allCharacters[random_int(0, strlen($allCharacters) - 1)];

            //بررسی عدم تکرار کارکتر پشت سر هم
            if (count($password) > 0 && $password[count($password) - 1] === $char) {
                continue;
            }
            $password[] = $char;
        }

        //مخلوط کردن کارکترها
        shuffle($password);

        return implode('', $password);
    }


    public function render()
    {
        $admins = Admin::query()->with('roles.permissions')->get();

        return view('livewire.admin.admin-user.index', [
            'admins' => $admins,
        ])->layout('layouts.admin.app');
    }
}













