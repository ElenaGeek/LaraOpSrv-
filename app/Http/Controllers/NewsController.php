<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\NewsOld;

class NewsController extends Controller
{
    public function index(News $news, $id)
    {

    $news = $news->getNews();
    $return =['news'=>$news, 'id' =>$id];
    // dd($return);
    return view('news', $return);

    $news->save();

    echo "complete";

    exit;
    return view('index', ['news'=>$news]);


    }
    public function category($id)
    {
        $item = News::find($id);

        dd($item);
        $return = ['item'=>$item];
        return view('news/info', $return);

        //news = $this->news[$id];
        //return $news['title'];
    }

}
