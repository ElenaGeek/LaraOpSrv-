<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
/*
        $response ='';
        return $response;
        return view('home');
*/
        return view('menu');

    }

}
