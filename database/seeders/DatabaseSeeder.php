<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ListCategory::class);
        $this->call(NewsSeeder::class);
        $this->call(ProductsCategorySeeder::class);
        $this->call(ProductsSeeder::class);
    }
}
