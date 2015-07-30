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


    public function gallery(){
        return view ('Pages.gallery');
    }


}
