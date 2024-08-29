<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        // dd(session()->all());
        // $foo = session('foo');
        // dd($foo);

        return view('login.index');
    }

    public function store(Request $request)
    {
        // authenticate user
        alert(__('Добро пожаловать!'));
        // flash(__('Добро пожаловать!'))->success();


        // if (true) {
        // return redirect()->back()->withInput();
        // }c

        return redirect()->route('user');
    }
}
