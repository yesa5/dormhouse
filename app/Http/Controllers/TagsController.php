<?php

namespace App\Http\Controllers;

use App\Tags;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('admin.tags')->with('tags', Tags::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.add.tags');
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
        $Tags = Tags::create([
            'tag_name' => $request->name
        ]);
        $Tags->save();
        return redirect('/admin/tags');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tags  $Tags
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $discussions = Tags::select('tags.*', 'discussions.*')
        ->join('tags_discussions', 'tags_discussions.tag_id', '=', 'tags.id')
        ->join('discussions', 'discussions.id', '=', 'tags_discussions.discussion_id')
        ->where('tags.id', $id)
        ->get();
        return view('show.category', compact('discussions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tags  $Tags
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('admin.edit.tags')->with('tags', Tags::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tags  $Tags
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        //
        $tags = Tags::find($id);
        $tags->tag_name = $request->name;
        $tags->save();
        return redirect('/admin/tags');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tags  $Tags
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $Tags = Tags::find($id);
        $Tags->delete();
        return redirect('/admin/tags');
    }
}
