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
            CategoriesTableSeeder::class,
            ProductsTableSeeder::class,
            SeoItemsTableSeeder::class,
            ProductImagesTableSeeder::class

        ]);

        //$this->call(CategoriesTableSeeder::class);
        //$this->call(ProductsTableSeeder::class);
        //$this->call(SeoItemsTableSeeder::class);
        //$this->call(ProductImagesTableSeeder::class);
    }
}
