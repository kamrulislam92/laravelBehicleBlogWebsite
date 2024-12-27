<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivecyController extends Controller
{
    // Display a list of all blogs
    public function index()
    {
        return view('pages.privecy'); 

        
        // $blogs = Blog::all(); // Fetch all blogs
    }

    
}
