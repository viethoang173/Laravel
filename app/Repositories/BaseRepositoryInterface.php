<?php

namespace App\Repositories;

interface BaseRepositoryInterface
{
    public function store($data);

    /**
     * @param $id
     * @return mixed
     */
    public function update($data, $id);

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id);

    /**
     * @param $id
     * @return mixed
     */
    public function findById($id);
}
