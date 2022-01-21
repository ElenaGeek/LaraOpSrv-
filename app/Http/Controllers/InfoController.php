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

        $return =['news'=>$this->news, 'in' =>$in];
        /*dd($return);*/
        return view('info', $return);

    }

    public function card($id)
    {
        $news = $this->news[$id];

        return $news['title'];
    }

}
