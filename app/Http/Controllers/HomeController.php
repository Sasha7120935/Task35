<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable

     */
    public function index()
    {
        $categories = Category::all()->take(15);
        $products = Product::all()->take(5);

        return view('home',
        [
            'categories'=> $categories,
            'products'=> $products
        ]


        );
    }
}
