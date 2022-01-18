<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{

private $news =[

1=> ['title' => 'Новость 1'],
2=> ['title' => 'Новость 2'],
3=> ['title' => 'Новость 3']
];

    public function index($ic)
    {
        $response ='';

        $response ="<h1>Новости в категории</h1>";
        $response .= view('header');

        $response .= "<img src='../img/{$ic}.png'></img><br>";

        $response .="<h2>Нажмите на ссылку для просмотра новости.</h2>";

        foreach ($this->news as $id => $item) {
            $response .="<div>
            <a href='/news/info/{id}'>
            {$item['title']}
            </a>
            <p>{$item['title']}{$item['title']}{$item['title']}</p>
            </div>";
        }

        $response .= view('footer');
        return $response;

    }
    public function category($id)
    {
        $news = $this->news[$id];
        return $news['title'];
    }

}
