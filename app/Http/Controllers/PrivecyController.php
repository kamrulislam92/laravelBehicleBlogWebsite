<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrivecyController extends Controller
{
    // Display a list of all blogs
    public function index()
    {
        $privacyContent = DB::table('privacy')->first();
        $latestPost = Blog::latest()->limit(5)->get();
    
        return view('pages.privecy', compact('privacyContent','latestPost')); 

        
        // $blogs = Blog::all(); // Fetch all blogs
    }

    
}
