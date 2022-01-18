<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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

        $response ="<h1>Сайт новостей</h1>";
        $response .= view('header');
        $response .="<h2>Приветствуем на странице новостей. Для просмотра новостей выберите категорию и пройдите по ссылке.</h2><br>";
        $response .="<p>Сайт предствляет новости в нескольких категориях - <b>Политика, Экономика, Культура, Погода.</b> <br> Вы можете посмотреть список новостей в каждой категории и подробную информацию о каждой новости.<br> Также Вы можете зарегистрироваться и добавить свою новость.</p><br>";

        $response .="<a href='/category'><b><i>Список категорий</b></a><br>";
        $response .="<a href='/form'><b>Авторизация</b></a><br>";
        $response .="<a href='/add'><b>Добавить новость</i></b></a><br>";

/*        foreach ($this->news as $id => $item) {
            $response .="<div>
            <img src='img/{$id}.png'></img><br>
            <a href='/news/{id}'>
            {$item['title']}
            </a>
            </div>";
        }
*/
        $response .= view('footer');
        return $response;

    }

    public function category($id)
    {
        $news = $this->news[$id];
        return $news['title'];
    }

}
