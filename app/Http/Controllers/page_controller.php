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
}
