<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class page_controller extends Controller
{
    public function home()
    {
        $title = 'Welcome to Echoes';
        return view('pages.home')->with('title', $title);
    }

    public function sign_in()
    {
        $title = 'Sign In and Start Listening';
        return view('pages.sign_in')->with('title', $title);
    }
}
