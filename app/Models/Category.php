<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model

{

    public function getCategories()
    {

    $categories = Category::all();
    return $categories;

    }

    public function news()
    {
        // Связи Один ко Многим
        return $this->hasMany(News::class);
    }

     public function getList()
    {

        return Category::select(['id', 'name'])
        ->get()
        ->pluck('name', 'id');
    }

}
