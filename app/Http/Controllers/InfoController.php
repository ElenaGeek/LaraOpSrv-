<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{

private $news =[
1=> ['id' => 1, 'title' => 'Новость 1', 'info' => ' Детальная информация по новости 1'],
2=> ['id' => 2, 'title' => 'Новость 2', 'info' => ' Детальная информация по новости 2'],
3=> ['id' => 3, 'title' => 'Новость 3', 'info' => ' Детальная информация по новости 3']
];

    public function index($in)
    {
        $response ='';

        $response ="<h1>Новость {$in} в деталях</h1>";
        $response .= view('header');

/*      $response .= "<img src='../img/{$id}.png'></img><br>"; */

        $response .="<h2>Как это было ... </h2>";

        foreach ($this->news as $id => $item) {
            if ($id == $in) {
            $response .="<div>
            <p>{$item['title']}</p>
            <p>{$item['info']}</p>
            </div>";
        }
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
