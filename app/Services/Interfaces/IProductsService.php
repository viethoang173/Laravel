<?php

namespace App\Services\Interfaces;

interface IProductsService
{
    function store($data);

    function edit($id);

    function update($data, $id);

    function destroy($id);
}
