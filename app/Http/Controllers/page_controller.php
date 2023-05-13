<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class page_controller extends Controller
{
    public function home()
    {
        $title = 'Welcome to Echoes';
        return view('pages.home')->with('title', $title);
    }

    public function sign_in_get()
    {
        $title = 'Sign In and Start Listening';
        return view('pages.sign_in')->with('title', $title);
    }

    public function sign_up_get()
    {
        $title = 'Sign Up and Start Listening';
        return view('pages.sign_up')->with('title', $title);
    }

    public function sign_up_post(Request $request)
    {
        $request->validate([
           'name' => 'required',
           'email' => 'required|email|unique:users',
           'password' => 'required'
        ]);

        $user_input['name'] = $request->name;
        $user_input['email'] = $request->email;
        $user_input['password'] = Hash::make($request->password);

        $user = User::create($user_input);

        if ($user) {
            return redirect(route('sign_in_get'));
        } else {
            return redirect(route('sign_up_get'));
        }
        
    }

    public function sign_in_post()
    {
        
    }
}
