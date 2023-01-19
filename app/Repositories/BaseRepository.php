<?php

namespace App\Repositories;

class BaseRepository implements BaseRepositoryInterface
{
    protected $model_class;

    protected $model;

    public function __construct()
    {
        if ($this->model_class){
            $this->model = app()->make($this->model_class);
        }
    }

    public function store($data)
    {
        $result = $this->model->newQuery()->create($data);
        return $this->model->find($result->id);
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
