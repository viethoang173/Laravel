<?php

namespace App\Services\Implement;

use App\Repositories\Implement\NewsRepository;
use App\Services\Interfaces\INewsService;
use http\Env\Request;

class NewsService implements INewsService
{
    protected $newRepository;

    public function __construct(NewsRepository $newRepository)
    {
        $this->newRepository = $newRepository;
    }

    public function store($data)
    {
        $data = Request::all();
        return $data;
    }
}
