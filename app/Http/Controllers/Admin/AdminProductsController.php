<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Models\Category;
use App\Models\Products;
use App\Models\ProductsCategory;
use App\Repositories\Interfaces\IProductsRepository;
use App\Services\Interfaces\INewsService;
use App\Services\Interfaces\IProductsService;

class AdminProductsController extends Controller
{
    private $productsService;

    public function __construct(IProductsService $productsService)
    {
        $this->productsService = $productsService;
    }
    public function index(){
        $products = Products::all();
        return view('admin.products.index', compact('products'));
    }

    public function create(){
        $statusReflector = new \ReflectionClass('App\Enums\Status');
        $category = ProductsCategory::all();
        return view('admin.products.create')->with(['category'=>$category,'listStatus'=>$statusReflector->getConstants()]);

    }

    public function store(CreateProductRequest $request){
        $validated = $request->validated();
        $this->productsService->store($validated);

        redirect(route('admin.products.index'));
    }
}
