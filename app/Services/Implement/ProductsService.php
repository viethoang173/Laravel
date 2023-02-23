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
        $currentMillis = round(microtime(true) * 1000);
        if(isset($data['thumbnail'])) {
            $uploadFileName = $currentMillis . '.' . $data['thumbnail']->extension();
            $extensionArr = ['.jpg', '.png', '.jpeg', '.svg'];
            $realUrl = str_replace($extensionArr, '.webp', $uploadFileName);
            $data['thumbnail']->move(public_path('images'), $realUrl);
            $data['thumbnail'] = asset('images/'.$realUrl);
        }

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

    function destroy($id)
    {
        $this->productsRepository->destroy($id);
    }
}
