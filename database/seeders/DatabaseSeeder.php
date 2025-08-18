<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        //$this->call(CountrySeeder::class);
        $this->call([

            CountrySeeder::class,
            StateSeeder::class,

        ]);

        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(SeoItemsTableSeeder::class);
        $this->call(ProductImagesTableSeeder::class);
        $this->call(CategoryFeaturesTableSeeder::class);
        $this->call(CategoryFeatureValuesTableSeeder::class);
        $this->call(DeliveryMethodsTableSeeder::class);
        $this->call(PaymentMethodsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(StoriesTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(ProductFeatureValuesTableSeeder::class);
    }
}
