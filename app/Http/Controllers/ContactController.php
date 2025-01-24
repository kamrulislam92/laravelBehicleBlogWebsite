<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Display a list of all blogs
    public function index()
    {
        
        $latestPost = Blog::latest()->limit(5)->get();

        return view('pages.contact', compact('latestPost')); 

    }

    
}
