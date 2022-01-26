<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{

private $news =[
1=> ['id' => 1, 'title' => 'Новость 1', 'info' => ' Детальная информация по новости 1'],
2=> ['id' => 2, 'title' => 'Новость 2', 'info' => ' Детальная информация по новости 2'],
3=> ['id' => 3, 'title' => 'Новость 3', 'info' => ' Детальная информация по новости 3']
];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dump('Hi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd($request);
        // dump($request->input('title'));
        // dump($request->input('all'));
    // if ($request ->isMethod('post'))
    //    {
            $title = $request ->input('title');
            $info = $request ->input('info');
            // сохраняем данные в базу
    //    }
    //return response() -> redirectToRoute('admin::news::new');
    return redirect() -> route('admin::news::new');
    }

    public function new()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function card($id)
    {
        $news = $this->news[$id];

        return $news['title'];
    }
}
