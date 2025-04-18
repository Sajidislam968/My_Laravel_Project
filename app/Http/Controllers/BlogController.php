<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog; // Import the Blog model

class BlogController extends Controller
{
    //to show all bolgs
    public function index()
    {
        $blog = Blog::all(); // Fetch all blogs from the database
        return view('blog.index', compact('blog')); // Pass the blogs to the view
    }
    public function create()
    {
        return view('blog.create'); // Return the view for creating a new blog
    }
    //to store the blog
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'Description' => 'required|string',
        ]);
        Blog::create($validatedData); // Create a new blog entry in the database
        return redirect()->route('blog.index')->with('success', 'Blog created successfully.'); // Redirect to the index page with a success message
    }
}
