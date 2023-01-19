<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsStoreRequest;
use App\Services\Implement\NewsService;
use http\Env\Request;

class AdminNewsController extends Controller
{
    protected $newsServie;

    public function __construct(NewsService $newsServie)
    {
        $this->newsServie = $newsServie;
    }

    public  function  index(){
        return view('admin.news.index');
    }

    public function create(){
        return view('admin.news.create');
    }

    public function store(NewsStoreRequest $request){
        $this->newsServie->store($request);
        redirect(route('admin.news.create.process'));
    }



}
