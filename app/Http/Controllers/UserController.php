<?php

namespace App\Http\Controllers;

use App\customer;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class UserController extends Controller
{


    public function register(){

        if (\Auth::guest())
        {
            return redirect('auth/login');
        }


        return \Auth::user()->name;
        return view('Pages.register');
    }

    public function register_user(){
        $input = Request::all();
        customer::create($input);
        return redirect('about');
    }

    public function userlogin(){
        return view('Pages.login');
    }

}
