<?php

namespace App\Repositories;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Support\Str;

class BaseRepository implements BaseRepositoryInterface
{
    protected $model_class;

    protected $model;

    /**
     * @throws BindingResolutionException
     */
    public function __construct()
    {
        if ($this->model_class){
            $this->model = app()->make($this->model_class);
        }
    }

    public function store($data)
    {
        $record = $this->model->newQuery()->create($data);
        $record->save();
        $record->refresh();
        return $record;
    }

    public function update($data, $id)
    {
        $record = $this->model->find($id);
        $record->fill($data);
        $record->save();
        $record->refresh();
        return $record;
    }

    public function destroy($id)
    {
        return $this->model->destroy($id);
    }

    public function findById($id)
    {
        $result = $this->model->find($id);
        return $result;
    }
}
