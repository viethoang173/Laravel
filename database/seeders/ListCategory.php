<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class ListCategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = Category::create([
            'content' => 'Dân sự',
        ]);

        $category2 = Category::create([
            'content' => 'Đời sống',
        ]);

        $category3 = Category::create([
            'content' => 'Xã hội',
        ]);
    }
}
