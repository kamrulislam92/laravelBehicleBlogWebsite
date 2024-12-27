<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermConditionController extends Controller
{
    // Display a list of all blogs
    public function index()
    {
        return view('pages.terms_condition'); 

        
        // $blogs = Blog::all(); // Fetch all blogs
    }

    
}
