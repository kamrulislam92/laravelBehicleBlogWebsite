<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {

        $blogs = Blog::all(); 
        $latestPost = Blog::latest()->limit(5)->get();
        
        return view('blogs.index', compact('blogs', 'latestPost')); 
        
    }

    public function show($slug)
    {
       $blog = Blog::where('slug', $slug)->firstOrFail();
       $category = Category::all();
       $latestPost = Blog::latest()->limit(5)->get();
       $relatedPost = Blog::where('category_id', $blog->category_id)->where('id','!=', $blog->id)->latest()->get();

        return view('blogs.show', compact('blog','category', 'latestPost', 'relatedPost'));
    }
    
}
