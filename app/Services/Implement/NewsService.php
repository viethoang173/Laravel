<?php

namespace App\Services\Implement;

use App\Repositories\Interfaces\INewsRepository;
use App\Services\Interfaces\INewsService;
use http\Env\Request;

class NewsService implements INewsService
{
    protected $newRepository;

    public function __construct(INewsRepository $newRepository)
    {
        $this->newRepository = $newRepository;
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

        $this->newRepository->store($data);
    }

    function edit($id)
    {
        return $this->newRepository->edit($id);
    }
}
