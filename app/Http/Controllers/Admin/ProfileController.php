<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Middleware;
use App\Http\Requests\AdminProfileEditRequest;

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

    public function create()
    {

        \App::setlocale('en');
        __('labels.username');

        $user = new User();
        $user->name = 'Ivan';
        $user->password = Hash::make('password');
        $user->email = 'mail@mail';
        $user->save();

        return view('admin.profile.update', [ 'user' => new User()]);
        $user->save();
    }

    public function delete ($id)
    {

        //dd($id);
        User::destroy([$id]);
        return redirect() -> route('admin::profile::index');

    }

    public function show()
    {
        return view('admin.profile.update', ['user' => Auth::user()]);
    }


    public function update(Request $request)
    {
        $user =\Auth::user();

// if ($request->id === NULL) $this->validate($request, User::rules());

        if($request->isMethod('post'))
        {
            $password =$request->post('password');
            $id = $request->post('id');

            if(!empty($password))
            {
              $user->password = \Hash::make($password);
            }

            $user->name = $request -> post('name');
            $user->email = $request -> post('email');
            $user->is_admin = $request -> has('is_admin');
            $user->save();
            // $request->session()->flash('MSG', 'Данные сохранены');

        }
        return redirect() -> route('admin::profile::show', ['user' => $user->id]);
//        -> with('success', "Данные сохранены");

    }




}
