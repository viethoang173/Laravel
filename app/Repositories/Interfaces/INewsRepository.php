<?php

namespace App\Repositories\Interfaces;

use App\Repositories\BaseRepositoryInterface;

interface INewsRepository extends BaseRepositoryInterface
{
    public function edit($id);
}
