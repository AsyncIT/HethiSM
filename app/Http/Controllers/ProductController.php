<?php

namespace App\Http\Controllers;


use App\customer;
use App\customer_item;
use App\product;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
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

    public  function store(ProductRequest $request)
    {
        $request->file('file')->move(__DIR__.'./../../../resources/product_image/',$request->file('file')->getClientOriginalName());
        product::create($request->all());
        return redirect('add-product');
    }



    public function category()
    {
        $products = product::get(); // get all product

        return view('Pages.products',compact('products')); // return products to index page

    }



    public function cart()
    {

        if (\Auth::guest())
        {
            return redirect('auth/login');
        }


        $shoppingCarts =customer_item::where('customer_id', '=', \Auth::user()->id)->get(); // get all selected shopping cart product from customer_items table

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

       // return view('Pages.shopping-cart');
    }

    public function checkout()
    {
        return view('Pages.checkout');
    }

}
