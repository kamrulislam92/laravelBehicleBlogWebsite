<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TermConditionController extends Controller
{
    // Display a list of all blogs
    public function index()
    {
        $termsContent = DB::table('terms')->first();
        return view('pages.terms_condition', compact('termsContent')); 

        
        // $blogs = Blog::all(); // Fetch all blogs
    }

    
}
