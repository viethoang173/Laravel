<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\ProductsCategory;
use App\Repositories\Interfaces\IProductsRepository;
use App\Services\Interfaces\INewsService;

class AdminProductsController extends Controller
{
    private $productsService;

    public function __construct(IProductsRepository $productsService)
    {
        $this->productsService = $productsService;
    }
    public function index(){
        $products = Products::all();
        return view('admin.products.index', compact('products'));
    }

    public function create(){
        return view('');
    }
}
