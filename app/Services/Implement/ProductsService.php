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

    function store($data)
    {
        $this->productsRepository->store($data);
    }

    function edit($id)
    {
        // TODO: Implement edit() method.
    }

    function update($data, $id)
    {
        // TODO: Implement update() method.
    }
}
