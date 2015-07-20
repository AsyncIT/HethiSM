<?php

namespace App\Http\Controllers;


use App\category;
use App\customer;
use App\customer_item;
use App\product;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Request;



class ProductController extends Controller
{


    public function index()
    {

        $featured_products = product::latest('created_at')->where('featured', '=', 'Yes')->limit('4')->get(); // get featured product
        $products = product::latest('created_at')->limit('8')->get(); // get all product

        return view('Pages.index',compact('products','featured_products')); // return products to index page
    }

    public function show($id)
    {

        $products = product::findOrFail($id);

        return view('Pages.view',compact('products'));
    }

    public  function store()
    {
        $input = Request::all();
        product::create($input);
        return redirect('add-product');
    }



    public function categorywise($id)
    {
        $products = product::where('product_category', '=', $id)->get(); // get all product
        $category = category::get();
        return view('Pages.products',compact('products','category','id')); // return products to index page

    }



    public function allcategory()
    {
        $products = product::get(); // get all product
        $category = category::get();
        $id = "All Products";
        return view('Pages.products',compact('products','category','id')); // return products to index page

    }

    public function cart()
    {

        if (\Auth::guest())
        {
            return redirect('auth/login');
        }


        $shoppingCarts =customer_item::where('customer_id', '=', \Auth::user()->id)->where('status', '=', '0')->get(); // get all selected shopping cart product from customer_items table

        return view('Pages.shopping-cart',compact('shoppingCarts')); // return products to index page

    }


    /**
     * view My AS Shopping Cart Details
     * site.com/cart
     * @return \Illuminate\View\View
     */
    public function AddToCart()
    {

        $input = Request::all();

        customer_item::create($input);
        return  redirect(url('cart'));


    }

    public function checkout()
    {

        if (\Auth::guest())
        {
            return redirect('auth/login');
        }

        $shoppingCarts =customer_item::where('customer_id', '=', \Auth::user()->id)->get(); // get all selected shopping cart product from customer_items table


        $users = User::get();

        return view('Pages.checkout',compact('users','shoppingCarts'));
    }

    public function getUserDetails()
    {

        if (\Auth::guest())
        {
            return redirect('auth/login');
        }

        $input = Request::all();
        User::WHERE('id','=', \Auth::user()->id)->update($input);
        return  redirect(url('payment'));

    }

    public function deleteProduct($id)

    {
        if (\Auth::guest())
        {
            return redirect('auth/login');
        }
        customer_item::where('customer_id', '=', \Auth::user()->id)->where('id', $id)->delete();
        return redirect('cart');
    }


    public function deleteAllCustomerItem()

    {
        if (\Auth::guest())
        {
            return redirect('auth/login');
        }
        customer_item::where('customer_id', '=', \Auth::user()->id)->update(array('status' => 1));
        return redirect('/');
    }

    public function payment()
    {
        $shoppingCarts =customer_item::where('customer_id', '=', \Auth::user()->id)->get(); // get all selected shopping cart product from customer_items table

        return view('Pages.payment',compact('shoppingCarts'));
    }



}
