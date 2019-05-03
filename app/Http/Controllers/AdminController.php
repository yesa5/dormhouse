<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Tags;
use App\Discussions;
use App\Comments;
use App\Categories;
use App\Votes;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() 
    {
        return view('admin');
    }
    public function users()
    {
        //dd(User::all());
        return view('admin.users')->with('users', User::all());
    }
    
    public function categories()
    {
        return view('admin.categories')->with('users', Categories::all());
    }

    public function comments()
    {
        return view('admin.comments')->with('users', Comments::all());
    }
    
    public function discussions()
    {
        return view('admin.discussions')->with('users', Discussions::all());
    }

    public function tags()
    {
        return view('admin.tags')->with('users', Tags::all());
    }
}
