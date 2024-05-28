<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function daftar()
    {
        return view('pages.register');
    }

    public function welcome(Request $request)
    {
        $fname = $request->input('firstname');
        $lname = $request->input('lastname');

        return view('pages.welcome', ['fname'=> $fname, 'lname'=>$lname]);
    }
}
