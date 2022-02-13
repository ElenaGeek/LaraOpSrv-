<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public function index()
    {
        $users = User::orderBy('name', 'asc')
        ->paginate(10);
        //$categories = User::orderBy('id')
        //->paginate(2);

        return view('admin.profile.index', ['users' =>$users]);
    }

    public function create(User $user)
    {

        \App::setlocale('en');
        __('labels.username');


        //dd($user);
//    return view('admin.profile.update');
/*
        return view('admin.profile.update',
        [ 'model' => new Category(),
          'categories' => $category->getList()
        ]);
*/

        return view('admin.profile.update',
        [ 'user' => new User()]);
    }

    public function show()
    {
        return view('admin.profile.update', ['user' => Auth::user()]);
    }


    public function update(Request $request)
    {
        $user =\Auth::user();

// if ($request->id === NULL) $this->validate($request, User::rules());
// if (!$request->id) $this->validate($request, User::rules());

        if($request->isMethod('post'))
        {
            $password =$request->post('password');

            if(\Hash::check($request->post('current_password'), $user->password))
            {
                if($this->validate($request, User::rules()))
                {

            $user->name = $request -> post('name');
            $user->email = $request -> post('email');
            $user->password = \Hash::make($request -> post('password'));
                }
            $user->save();
            // $request->session()->flash('MSG', 'Данные сохранены');
             }
        }
        return view('admin.profile.update', ['user' => $user]);
    }
}
