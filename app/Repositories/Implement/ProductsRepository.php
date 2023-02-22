<?php

namespace App\Repositories\Implement;

use App\Models\News;
use App\Models\Products;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\IProductsRepository;

class ProductsRepository extends BaseRepository implements IProductsRepository
{
    protected $model_class = Products::class;

}
