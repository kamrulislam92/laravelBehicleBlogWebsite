<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TermConditionController extends Controller
{
    // Display a list of all blogs
    public function index()
    {
        $termsContent = DB::table('terms')->first();
        $latestPost = Blog::latest()->limit(5)->get();
        return view('pages.terms_condition', compact('termsContent', 'latestPost')); 

        
        // $blogs = Blog::all(); // Fetch all blogs
    }

    
}
