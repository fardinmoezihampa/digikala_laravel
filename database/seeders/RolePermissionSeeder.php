<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{

    public function run(): void
    {
        // دسترسی ها(Permissions)
        $permissions = [
            // مدیریت محصولات
            'view products',
            'create products',
            'edit products',
            'delete products',
            //مدیریت سفارش ها
            'view orders',
            'process orders',
            //مدیریت دسته بندی ها
            'view categories',
            'create categories',
            'edit categories',
            'delete categories',
        ];
//-------------------------------------------------------------------------------
        //ایجاد دسترسی ها در دیتابیس
        foreach ($permissions as $permission) {
            Permission::query()->firstOrCreate([
                'name' => $permission,
                'guard_name' => 'admin',
            ]);
        }
//-------------------------------------------------------------------------------

        //تعریف نقش ها(Roles) و تخصیص دسترسی ها

        //نقش آدمین کل
        $superAdmin = Role::query()->firstOrCreate([
            'name' => 'super admin',
            'guard_name' => 'admin',
        ]);
        $superAdmin->givePermissionTo(Permission::all());

        //نقش آدمین محصولات
        $productAdmin = Role::query()->firstOrCreate([
            'name' => 'product admin',
            'guard_name' => 'admin',
        ]);
        $productAdmin->givePermissionTo([
            'view products', 'create products', 'edit products', 'delete products',
            'view categories', 'create categories', 'edit categories', 'delete categories',
        ]);

        //نقش آدمین سفارشات
        $orderAdmin = Role::query()->firstOrCreate([
            'name' => 'order admin',
            'guard_name' => 'admin',
        ]);
        $orderAdmin->givePermissionTo([
            'view orders', 'process orders',
        ]);
//-------------------------------------------------------------------------------
        //کاربر آدمین کل
        $superAdminUser = Admin::query()->firstOrCreate(
            [
                'email' => 'superadmin@example.com'
            ],
            [
                'name' => 'Super Admin',
                'password' => bcrypt('password'),
                'mobile' => '0912000001',
            ]
        );
        $superAdminUser->assignRole('super admin');


        //کاربر آدمین محصولات
        $productAdminUser = Admin::query()->firstOrCreate(
            [
                'email' => 'productdmin@example.com'
            ],
            [
                'name' => 'Product Admin',
                'password' => bcrypt('password'),
                'mobile' => '0912000002',
            ]
        );
        $productAdminUser->assignRole('product admin');

        //کاربر آدمین محصولات
        $orderAdminUser = Admin::query()->firstOrCreate(
            [
                'email' => 'orderadmin@example.com'
            ],
            [
                'name' => 'OrderAdmin',
                'password' => bcrypt('password'),
                'mobile' => '0912000003',
            ]
        );
        $orderAdminUser->assignRole('order admin');

//-------------------------------------------------------------------------------

    }


}
