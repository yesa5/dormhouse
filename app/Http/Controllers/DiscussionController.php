<?php

namespace App\Http\Controllers;

use App\Discussions;
use App\Tags;
use App\Votes;
use Illuminate\Http\Request;
use App\Categories;
use Illuminate\Support\Facades\Auth;
use App\TagsDiscussions;
use App\Comments;
use App\User;

class DiscussionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.discussions')->with('discussions', Discussions::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tags = Tags::all();
        $categories = Categories::all();
        return view('admin.add.discussions', compact('tags', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request);
        $discussions = Discussions::create([
            'discussion_user_id' => Auth::user()->id,
            'discussion_category_id' => $request->category_id,
            'discussion_title' => $request->title,
            'discussion_description' => $request->description,
            'discussion_views' => 0
        ]);
        $discussions->save();

        TagsDiscussions::create([
            'tag_id' => $request->tag_id,
            'discussion_id' => $discussions->id
        ]);
        if (Auth::user()->is_admin)
            return redirect('/admin/discussions');
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Discussions  $Discussions
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $discussion = Discussions::find($id);
        $discussion->discussion_views += 1;
        $discussion->save();

        $votesLike = Votes::all()->where('vote_discussion_id', $id)->where('vote_is_like', true);
        $votesDislike = Votes::all()->where('vote_discussion_id', $id)->where('vote_is_like', false);
        $comments = Comments::all()->where('comment_discussion_id', $id);
        $discussions = Discussions::find($id);
        $users = User::all();
        //dd($discussions);
        return view('show.discussion', compact('votesLike', 'votesDislike','comments', 'discussions', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Discussions  $Discussions
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tags = Tags::all();
        $categories = Categories::all();
        $discussions = Discussions::find($id);
        return view('admin.edit.discussions', compact('tags', 'categories', 'discussions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Discussions  $Discussions
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        //
        $discussions = Discussions::find($id);
        $discussions->discussion_user_id = Auth::user()->id;
        $discussions->discussion_category_id = $request->category_id;
        $discussions->discussion_title = $request->title;
        $discussions->discussion_description = $request->description;
        $discussions->save();
        return redirect('/admin/discussions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Discussions  $Discussions
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $votes = Votes::all()->where('vote_discussion_id', $id);
        foreach($votes as $td)
            $td->delete();
        $comments = Comments::all()->where('comment_discussion_id', $id);
        foreach($comments as $td)
            $td->delete();
        $tags_discussions = TagsDiscussions::all()->where('discussion_id', $id);
        foreach($tags_discussions as $td)
            $td->delete();
        $discussions = Discussions::find($id);
        $discussions->delete();
        return redirect('/admin/discussions');
    }

    public function search(Request $request) 
    {
        $discussions = Discussions::where('discussion_title', 'LIKE', '%'.$request->q.'%')
                            ->orWhere('discussion_description', 'LIKE', '%'.$request->q.'%')
                            ->get();
        //dd($request->q);
        return view('search', compact('discussions'));
    }
}
