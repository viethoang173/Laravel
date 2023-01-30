<?php

namespace App\Http\Controllers\Admin;

use App\Enums\NewsStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsStoreRequest;
use App\Models\Category;
use App\Models\News;
use App\Services\Interfaces\INewsService;

class AdminNewsController extends Controller
{
    private $newsService;

    public function __construct(INewsService $newsService)
    {
        $this->newsService = $newsService;
    }

    public  function  index(){
        $listNews = News::all();
        return view('admin.news.index')->with(['listNews'=>$listNews]);
    }

    public function create(){
        $newsStatusReflector = new \ReflectionClass('App\Enums\NewsStatus');
        $listCategory = Category::all();

        return view('admin.news.create')->with(['newsStatus' => $newsStatusReflector->getConstants(), 'listCategory'=> $listCategory]);
    }

    public function store(NewsStoreRequest $request) {
        $validated = $request->validated();
        $this->newsService->store($validated);

        return redirect(route('admin.news.index'));
    }

    public function edit($id){
        $listCategory = Category::all();
        $listNews = $this->newsService->edit($id);
        foreach ($listNews as $item)

        return view('admin.news.edit', compact('item','listCategory'));
    }
}
