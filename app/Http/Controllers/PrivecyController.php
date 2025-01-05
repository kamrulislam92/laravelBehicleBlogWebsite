<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrivecyController extends Controller
{
    // Display a list of all blogs
    public function index()
    {
        $privacyContent = DB::table('privacy')->first();
        // dd($content);
        return view('pages.privecy', compact('privacyContent')); 

        
        // $blogs = Blog::all(); // Fetch all blogs
    }

    
}
