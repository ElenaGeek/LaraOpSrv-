<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{

private $news =[

1=> ['title' => 'Политика'],
2=> ['title' => 'Экономика'],
3=> ['title' => 'Культура'],
4=> ['title' => 'Погода']
];


    public function index()
    {
        $response ='';

        $response ="<h1>Категории новостей</h1>";
        $response .= view('header');
        $response .="<h2>Приветствуем на странице категорий новостей. Для просмотра новостей выберите категорию и пройдите по ссылке.</h2>";

        foreach ($this->news as $id => $item) {
            $response .="<div>
            <img src='img/{$id}.png'></img><br>
            <a href='/news/{id}'>
            {$item['title']}
            </a>
            </div>";
        }

        $response .= view('footer');
        return $response;

    }

    public function card($id)
    {
        $news = $this->news[$id];
        return $news['title'];
    }

}
