<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Categories;

class HomepageController extends Controller
{
    //fungsi untuk menampilkan halaman homepage
    public function index()
    {
        $categories = Categories::all();
        return view('homepage', [
            'categories' => $categories,
        ]);
    }
    public function products()
    {

        return view('products');
    }

    public function product($slug)
    {
        return view('product', ['slug' => $slug]);
    }

    public function categories()
    {
        return view('categories');
    }
    public function category($slug)
    {
        $category = Categories::find($slug);
        return view('single_category', [
            'slug' => $slug,
            'category' =>
                $category
        ]);
    }
    public function cart()
    {
        return view('cart');
    }
    public function checkout()
    {
        return view('checkout');
    }
}
