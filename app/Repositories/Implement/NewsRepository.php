<?php

namespace App\Repositories\Implement;

use App\Models\News;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\INewsRepository;

class NewsRepository extends BaseRepository implements INewsRepository
{
    protected $model_class = News::class;

    public function edit($id)
    {
        $record = $this->model->where('id', $id)->get();
        return $record;
    }
}
