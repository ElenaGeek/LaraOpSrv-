<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddController extends Controller
{

    public function index()
    {
        $response ='';
        $response ="<h1>Добавьте новость в категорию</h1>";
/*      $response ="<h1>Добавьте новость в категорию {$in}</h1>";*/
        $response .= view('header');

/*      $response .= "<img src='../img/{$in}.png'></img><br>";*/

        $response .="<h3>Заполните поля ниже</h3>";

        $response .= view('page');

        $response .= view('footer');
        return $response;

    }

    public function card($id)
    {
        $news = $this->news[$id];

        return $news['title'];
    }

}
