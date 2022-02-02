<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;

class NewsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('updated_at', 'desc')
        ->paginate(10);
        //$news = News::orderBy('id')
        //->paginate(2);

        return view('admin.news.index', ['news' =>$news]);
    }

    public function create(Category $category)
    {
        //dd($category);
        return view('admin.news.create',
        [ 'model' => new News(),
          'categories' => $category->getList()
        ]);
    }

    public function update(Category $category, News $news)
    {

        dump($news);
        return view('admin.news.create',
        [ 'model' => News(),
          'categories' => $category->getList()
        ]);

        // return view('admin.news.create');

    }

    public function delete ($id)
    {

        //dd($id);
        News::destroy([$id]);
        return redirect() -> route('admin::news::index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $id = $request ->post ('id');
        // @var News $model
        //$model = News::findOrNew($id);
        $model = $id ? News::find($id) : new News();
        $model ->fill($request->all());
        $model ->save();
        dd($model);
        return redirect() -> route('admin::news::update', ['news' => $model->id])
        -> with('success', "Данные сохранены");
    }




//-------------------------------------------------------------------------------

    public function createOld(Request $request)
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
    //public function update(Request $request, $id)
    //{
        //
    //}

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
