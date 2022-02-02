<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
/*
private $categories =[

1=> ['title' => 'Политика'],
2=> ['title' => 'Экономика'],
3=> ['title' => 'Культура'],
4=> ['title' => 'Погода']
];
*/
    public function index(Category $categories)
    {

    $categories = $categories->getCategories();
    $return =['categories'=>$categories];
    return view('category', $return);

    //$return =['categories'=>$this->categories];
    //return view('category',['categories'=>$this->categories]);

    }

}
