<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function blog()
    {
        return view('blog');
    }
    public function contact()
    {
        return view('contact');
    }
    public function women()
    {
        return view('women');
    }
    public function women2()
    {
        return view('women2');
    }
    public function women3()
    {
        return view('women3');
    }
    public function kids()
    {
        return view('kids');
    }
    public function kids2()
    {
        return view('kids2');
    }
    public function product()
    {
        return view('product-single');
    }
}
