<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Discussions;
use Illuminate\Support\Facades\DB;

class FilterController extends Controller
{
    //
    public function id($up) 
    {
        //dd($up);
        if ($up == "true") {
            return view('admin.discussions')->with('discussions', Discussions::orderBy('id', 'asc')->get());
        }
        
        return view('admin.discussions')->with('discussions', Discussions::orderBy('id', 'desc')->get());
    }

    public function title($up) 
    {
        if ($up == "true") {
            return view('admin.discussions')->with('discussions', Discussions::orderBy('discussion_title', 'asc')->get());
        }
        return view('admin.discussions')->with('discussions', Discussions::orderBy('discussion_title', 'desc')->get());
    }

    public function description($up) 
    {
        if ($up == "true") {
            return view('admin.discussions')->with('discussions', Discussions::orderBy('discussion_description', 'asc')->get());
        }
        return view('admin.discussions')->with('discussions', Discussions::orderBy('discussion_description', 'desc')->get());
    }

    public function views($up) 
    {
        if ($up == "true") {
            return view('admin.discussions')->with('discussions', Discussions::orderBy('discussion_views', 'asc')->get());
        }
        return view('admin.discussions')->with('discussions', Discussions::orderBy('discussion_views', 'desc')->get());
    }

    public function author($up) 
    {
        if ($up == "true") {
            return view('admin.discussions')->with('discussions', Discussions::orderBy('discussion_user_id', 'asc')->get());
        }
        return view('admin.discussions')->with('discussions', Discussions::orderBy('discussion_user_id', 'desc')->get());
    }

    public function category($up) 
    {
        if ($up == "true") {
            return view('admin.discussions')->with('discussions', Discussions::orderBy('discussion_category_id', 'asc')->get());
        }
        return view('admin.discussions')->with('discussions', Discussions::orderBy('discussion_category_id', 'desc')->get());
    }


    
}
