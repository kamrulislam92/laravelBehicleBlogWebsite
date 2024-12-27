<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Display a list of all blogs
    public function index()
    {
        return view('pages.contact'); 

        
        // $blogs = Blog::all(); // Fetch all blogs
    }

    
}
