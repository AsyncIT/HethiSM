<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;
use App\product;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class adminController extends Controller
{



    public function adminlogin(){

        if (\Auth::guest())
        {
            return redirect('auth/login');
        }

        return view('backoffice.login');
    }

    public function dashboard(){

        if (\Auth::guest())
        {
            return redirect('auth/login');
        }

        return view('backoffice.cart_dashboard');
    }

    public function add_Product(){

        if (\Auth::guest())
        {
            return redirect('auth/login');
        }

        $categories = category::get(); // get all product

        return view('backoffice.cart_add_Products',compact('categories'));
    }

    public function add_Category(){

        if (\Auth::guest())
        {
            return redirect('auth/login');
        }

        return view('backoffice.cart_add_category');
    }

    public function add_slider(){

        if (\Auth::guest())
        {
            return redirect('auth/login');
        }

        return view('backoffice.add_slider');
    }

    public function cart_Settings(){

        if (\Auth::guest())
        {
            return redirect('auth/login');
        }


        return view('backoffice.cart_Settings');
    }

    public function view_product(){

        if (\Auth::guest())
        {
            return redirect('auth/login');
        }

        return view('backoffice.cart_view_products');
    }

    public function view_orders(){
        return redirect('auth/login');
    }

    public function cart_customers(){
        return redirect('auth/login');
    }


}
