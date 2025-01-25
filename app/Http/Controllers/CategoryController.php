<?php
namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $blogs = Blog::where('category_id', $category->id)->get();
        $categories = Category::all();
        $latestPost = Blog::latest()->limit(5)->get();

        return view('blogs.category', compact('blogs', 'categories', 'latestPost', 'category'));
    }
}

