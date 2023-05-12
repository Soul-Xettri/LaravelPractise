<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function register(Request $request)
    {   
        $request->validate(
            [
                'name' =>'required',
                'email'=>'required | email',
                'password'=>'required|confirmed',
                'password_confimation'=>'required'
                //another way to confirm pass
                // 'password'=>'required',
                // 'passwordConfirme'=>'required|same:password'
            ]
            );
        echo('<pre>');
        print_r($request->all());
    }
}
