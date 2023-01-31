<?php

namespace Database\Seeders;

use App\Models\ProductsCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = ProductsCategory::create([
            'name' => 'Trái cây',
        ]);

        $category2 = ProductsCategory::create([
            'name' => 'Rau củ quả',
        ]);

        $category3 = ProductsCategory::create([
            'name' => 'Sữa, bơ, phô mai',
        ]);
    }
}
