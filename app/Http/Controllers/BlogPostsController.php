<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogArticle;
use App\BlogCategory;

class BlogPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = BlogArticle::all();
        $categories = BlogCategory::all();

        return view('admin.blog-articles', compact('articles', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'category_id' => 'required',
            'description' => ['required', 'min:3']
        ]);

        BlogArticle::create($attributes);

        return back()->with('message', 'The blog article has been created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogArticle $blogpost)
    {
        $categories = BlogCategory::all();

        return view('admin.edit-article', compact('blogpost', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogArticle $blogpost)
    {
        $blogpost->update(request(['title', 'category_id', 'description']));

        return redirect('/blogposts')->with('message', 'The blog article has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
