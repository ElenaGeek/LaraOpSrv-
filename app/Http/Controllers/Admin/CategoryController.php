<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
// use App\Http\Requests;

class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('name', 'asc')
        ->paginate(10);
        //$categories = Category::orderBy('id')
        //->paginate(2);

        return view('admin.categories.index', ['categories' =>$categories]);
    }

    public function create(Category $category)
    {

        \App::setlocale('en');
        __('labels.name');


        //dd($category);

        return view('admin.categories.create',
        [ 'model' => new Category(),
          'categories' => $category->getList()
        ]);
    }

    public function update(Category $category, $id)
    {
        /*
        $return = [ 'model' => $category-> getCategoryById($id),
          'categories' => $category->getList()];
        dump($return);
        */

        return view('admin.categories.create',
        [ 'model' => $category-> getCategoryById($id),
          'categories' => $category->getList()
        ]);


    }

    public function delete ($id)
    {

        //dd($id);
        Category::destroy([$id]);
        return redirect() -> route('admin::categories::index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {

        if ($request->id === NULL) $this->validate($request, Category::rules());

        $id = $request->post('id');
        // @var Category $model
        // $model = Category::findOrNew($id);
        //dump ($id);
        $model = $id ? Category::find($id) : new Category();
        $model ->fill($request->all());
        $model ->save();
        //dd($model);
        return redirect() -> route('admin::categories::update', ['category' => $model->id])
        -> with('success', "Данные сохранены");
    }

}