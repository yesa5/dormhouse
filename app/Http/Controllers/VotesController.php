<?php

namespace App\Http\Controllers;

use App\Votes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    public function addVote($id)
    {
        //
        if (null !== Votes::where('vote_discussion_id', $id)->where('vote_user_id', Auth::user()->id)->where('vote_is_like', true)->get()->first())
            return redirect('/discussion/'.$id);
        $vote = Votes::create([
            'vote_user_id' => Auth::user()->id,
            'vote_discussion_id' => $id,
            'vote_is_like' => true
        ]);
        $vote -> save();
        $vote = Votes::where('vote_discussion_id', $id)
        ->where('vote_user_id', Auth::user()->id)
        ->where('vote_is_like', false)
        ->get()
        ->first();
        if ($vote)
            Votes::find($vote->id)->delete();
        return redirect('/discussion/'.$id);
    }

    public function deleteVote($id)
    {
        //
        if (null !== Votes::where('vote_discussion_id', $id)->where('vote_is_like', false)->where('vote_user_id', Auth::user()->id)->get()->first())
            return redirect('/discussion/'.$id);
        $vote = Votes::create([
            'vote_user_id' => Auth::user()->id,
            'vote_discussion_id' => $id,
            'vote_is_like' => false
        ]);
        $vote -> save();
        $vote = Votes::where('vote_discussion_id', $id)
        ->where('vote_user_id', Auth::user()->id)
        ->where('vote_is_like', true)
        ->get()
        ->first();
        if ($vote)
            Votes::find($vote->id)->delete();
        return redirect('/discussion/'.$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Votes  $votes
     * @return \Illuminate\Http\Response
     */
    public function show(Votes $votes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Votes  $votes
     * @return \Illuminate\Http\Response
     */
    public function edit(Votes $votes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Votes  $votes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Votes $votes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Votes  $votes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Votes $votes)
    {
        //
    }
}
