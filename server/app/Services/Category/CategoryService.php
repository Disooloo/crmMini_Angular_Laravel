<?php

namespace App\Services\Category;


use App\Models\Category;

class CategoryService
{

    public function getItems()
    {
        return Category::all();
    }
}
