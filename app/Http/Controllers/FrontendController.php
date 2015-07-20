<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{

    public function contact(){
        return view('Pages.contact');
    }

    public function about(){
        return view('Pages.about');
    }


    public function login(){
        return view('backoffice.login');
    }

    public function admin(){
        return view('backoffice.dashboard');
    }


}
