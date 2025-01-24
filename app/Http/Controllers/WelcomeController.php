<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    
    public function index()
    {
        $blogs = Blog::latest()->limit(2)->get();
        $latestPost = Blog::latest()->limit(5)->get();
        
        return view('welcome',compact('blogs','latestPost')); 
    }

}
