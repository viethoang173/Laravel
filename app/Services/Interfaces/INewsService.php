<?php

namespace App\Services\Interfaces;

interface INewsService
{
    function store($data);

    function edit($id);

    function update($data, $id);
}
