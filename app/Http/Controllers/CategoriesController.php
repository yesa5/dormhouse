<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;
use App\Discussions;
use Illuminate\Support\Facades\DB;


class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.categories')->with('categories', Categories::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.add.categories');
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
        $Categories = Categories::create([
            'category_name' => $request->name
        ]);
        $Categories->save();
        return redirect('/admin/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categories  $Categories
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $discussions = Discussions::all()->where('discussion_category_id', $id);
        $count = Discussions::select(DB::raw('count(*) as count, discussion_category_id'))
            ->where('discussion_category_id', $id)
            ->groupBy('discussion_category_id')
            ->get();
       
        $category = Categories::find($id);
        return view('show.category', compact('discussions', 'category', 'count'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categories  $Categories
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('admin.edit.categories')->with('categories', Categories::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categories  $Categories
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        //
        $categories = Categories::find($id);
        $categories->category_name = $request->category_name;
        $categories->save();
        return redirect('/admin/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categories  $Categories
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $Categories = Categories::find($id);
        $Categories->delete();
        return redirect('/admin/categories');
    }
}
