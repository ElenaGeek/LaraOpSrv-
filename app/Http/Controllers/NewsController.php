<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{

private $news =[
1=> ['id' => 1, 'title' => 'Новость 1', 'info' => ' Детальная информация по новости 1'],
2=> ['id' => 2, 'title' => 'Новость 2', 'info' => ' Детальная информация по новости 2'],
3=> ['id' => 3, 'title' => 'Новость 3', 'info' => ' Детальная информация по новости 3']
];

    public function index($ic)
    {

    $return =['news'=>$this->news, 'ic' =>$ic];
    return view('news', $return);

    }
    public function category($id)
    {
        $news = $this->news[$id];
        return $news['title'];
    }

}
