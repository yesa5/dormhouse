<?php

namespace App\Http\Controllers;

use App\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.comments')->with('comments', Comments::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.add.comments');
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
        $comments = Comments::create([
            'comment_user_id' => Auth::user()->id,
            'comment_discussion_id' => $request->discussion_id,
            'comment_parent_id' => $request->parent_id,
            'comment_description' => $request->description
        ]);
        $comments->save();
        return redirect('/admin/comments');
    }

    public function newComment(Request $request) {
        $comments = Comments::create([
            'comment_user_id' => Auth::user()->id,
            'comment_discussion_id' => $request->discussion_id,
            'comment_parent_id' => $request->parent_id,
            'comment_description' => $request->description
        ]);
        $comments->save();
        return redirect('/discussion/'.$request->discussion_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comments  $Comments
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comments  $Comments
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('admin.edit.comments')->with('comments', Comments::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comments  $Comments
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        //
        $comments = Comments::find($id);
        $comments->comment_user_id = $request->user_id;
        $comments->comment_discussion_id = $request->discussion_id;
        $comments->comment_parent_id = $request->parent_id;
        $comments->comment_description = $request->description;
        $comments->save();
        return redirect('/admin/comments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comments  $Comments
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $comments = Comments::find($id);
        $comments->delete();
        return redirect('/admin/comments');
    }
}
