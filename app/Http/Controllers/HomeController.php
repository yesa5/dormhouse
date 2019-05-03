<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discussions;
use App\Categories;
use App\Tags;
use App\Comments;

class HomeController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $discussions = Discussions::orderBy('created_at', 'desc')->get();
        $categories = Categories::all();
        $tags = Tags::all();
        return view('welcome', compact('discussions', 'categories', 'tags'));
    }
}
