<?php

namespace App\Services\Implement;

use App\Repositories\Interfaces\IProductsRepository;
use App\Services\Interfaces\IProductsService;

class ProductsService implements IProductsService
{
    protected $productsRepository;

    public function __construct(IProductsRepository $productsRepository)
    {
        $this->productsRepository= $productsRepository;
    }
}
