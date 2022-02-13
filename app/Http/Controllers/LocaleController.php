<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocaleController extends Controller
{
    public function index(Request $request, $lang)
    {
        /* 1-st
        \App::setLocale($lang);
        dd(\App::setlocale($lang));
        */

        /* 2-nd
        $_SESSION['locale'] = $lang;
        */

        $_SESSION['locale'] = $lang;
        //dump($_SESSION['locale']);

        $request = $_SESSION['locale'];
        return redirect()->back();
    }
}
