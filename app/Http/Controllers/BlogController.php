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

        return view('blogs.index', compact('blogs')); 
        
    }

    // public function show($slug)
    // {
    //     $blog = Blog::where('slug', $slug)->firstOrFail();
    //    $category = Category::all();
    //    $latestPost = Blog::latest()->limit(5)->get();
    //    $relatedPost = Blog::where('category_id', $blog->category_id)->where('id','!=', $blog->id)->latest()->get();
    // //    dd($relatedPost);
    //     return view('blogs.show', compact('blog','category', 'latestPost', 'relatedPost'));
    // }
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
    
        // Retrieve categories (only if needed)
        $categories = Category::all();
    
        // Retrieve the latest 5 blog posts
        $latestPosts = Blog::latest()->limit(5)->get();
    
        // Retrieve related posts by category, excluding the current blog
        $relatedPosts = Blog::where('category_id', $blog->category_id)
                            ->whereNotNull('category_id')
                            ->where('id', '!=', $blog->id)
                            ->latest()
                            ->limit(5)
                            ->get();
    
        return view('blogs.show', compact('blog', 'categories', 'latestPosts', 'relatedPosts'));
    }
    
    // // Show a single blog post
    // public function show($id)
    // {
    //     $blog = Blog::findOrFail($id); // Fetch the blog by ID
    //     return view('blogs.show', compact('blog')); // Return a view with the blog
    // }

    // // Show the form to create a new blog
    // public function create()
    // {
    //     return view('blogs.create'); // Return the create blog form view
    // }

    // // Store a new blog in the database
    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'title' => 'required|max:255',
    //         'content' => 'required',
    //     ]);

    //     Blog::create($validated); // Create a new blog
    //     return redirect()->route('blogs.index')->with('success', 'Blog created successfully!');
    // }

    // // Show the form to edit an existing blog
    // public function edit($id)
    // {
    //     $blog = Blog::findOrFail($id); // Fetch the blog by ID
    //     return view('blogs.edit', compact('blog')); // Return the edit blog form view
    // }

    // // Update an existing blog
    // public function update(Request $request, $id)
    // {
    //     $validated = $request->validate([
    //         'title' => 'required|max:255',
    //         'content' => 'required',
    //     ]);

    //     $blog = Blog::findOrFail($id); // Fetch the blog by ID
    //     $blog->update($validated); // Update the blog
    //     return redirect()->route('blogs.index')->with('success', 'Blog updated successfully!');
    // }

    // // Delete a blog
    // public function destroy($id)
    // {
    //     $blog = Blog::findOrFail($id); // Fetch the blog by ID
    //     $blog->delete(); // Delete the blog
    //     return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully!');
    // }
}
