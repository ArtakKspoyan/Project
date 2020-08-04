<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Blog;

class BlogController extends Controller
{
    public function index(Request $request)
    {
          
        $categories = Category::all();
        // $blogs = Blog::orderBy('id','desc')->limit(6)->get();
        $blogs = Blog::all();
        return view('general')->with(['category' => $categories, 'blog' =>  $blogs]);
    }
}
