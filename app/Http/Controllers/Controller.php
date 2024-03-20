<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PostController;
use App\Models\post;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public $posts;

    public function __construct()
    {
        $this->posts = post::all();
    }

    public function index()
    {
        if (Auth::check()) {
            $posts = $this->posts;
            return view('/dashboard')->with(compact('posts'));
        }
        return view('mainPage');
    }

    public function indexSignin()
    {
        if (Auth::check()) {
            $posts = $this->posts;
            return view(
                '/dashboard'
            )->with(compact('posts'));
        }
        return view('sign_in');
    }

    public function indexRegister()
    {
        if (Auth::check()) {
            $posts = $this->posts;
            return view(
                '/dashboard'
            )->with(compact('posts'));
        }
        return view('sign_up');
    }

    public function indexDashboard()
    {
        if (Auth::check()) {
            $posts = $this->posts;
            return view(
                '/dashboard'
            )->with(compact('posts'));
        }
        echo '<script>alert(Account got Logged out");</scrip>';
        return redirect('/mainPage');
    }

    public function signin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $posts = $this->posts;
            return view(
                '/dashboard'
            )->with(compact('posts'));
        }
        return view('/sign_in')->with(['error' => 1]);

        // return view('demo', ['request' => $request]);
    }

    public function logout(Request $request)
    {
        Auth::logout();


        return redirect('/');
    }

    public function register(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ]);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        echo '<script>  alert("Account Created Successfully");   </script>';

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/dashboard')->with(['name' => Auth::user()->name]);
        }
        return redirect('/register')->withError('Error');

        // return view('demo', ['request' => $error]);
    }
}
