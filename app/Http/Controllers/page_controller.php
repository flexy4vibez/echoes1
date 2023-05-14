<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class page_controller extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function sign_in_get()
    {
        $title = 'Sign In and Start Listening';
        if (Auth::check()) {
            return redirect(route('home'))->with('title', $title);
        } else {
            return view('pages.sign_in')->with('title', $title);
        }
    }

    public function sign_up_get()
    {
        $title = 'Sign Up and Start Listening';
        if (Auth::check()) {
            return redirect(route('home'))->with('title', $title);
        } else {
            return view('pages.sign_up')->with('title', $title);
        }  
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
        //$user_input['password'] = Hash::make($request->password);
        $user_input['password'] = $request->password;

        $user = User::create($user_input);

        if ($user) {
            return redirect(route('sign_in_get'))->with('success', 'Registration successful, login now to enjoy great music!');
        } else {
            return redirect(route('sign_up_get'))->with('error', 'Registration failed, try again.');
        }
        
    }

    public function sign_in_post(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user_input = $request->only('email', 'password');
        if (Auth::attempt($user_input)) {
            return redirect(route('home'));
        } else {
            return redirect(route('sign_in_get'))->with('error', 'Invalid login details, crosscheck and try again.');
        }
        
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('home'));
    }
}
