<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model

{
    protected $table = 'categories';

    protected $fillable = [
    'name',
    'image'
];

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

     public function getCategoryById($id)
    {

        // dump($id);
        $category = Category::findOrNew($id);
        return $category;

    }


    public static function rules(){

    return[
        'name' => 'required|min:5|max:50|unique:categories',
        'image' =>'required|integer|min:1|max:9|unique:categories'
    ];
}

}
