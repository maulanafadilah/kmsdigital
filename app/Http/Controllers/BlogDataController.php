<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Blog;

class BlogDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'BLOG';
        $action = __FUNCTION__;
        $bottom = true;
        $footer = false;
        $header = 'header-title';
		
        $blog = Blog::latest()->Paginate(5);

        return view('blog.index', compact('page_title', 'action', 'bottom', 'footer', 'header'), ['blog'=>$blog]);
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $page_title = 'KMS Blog';
        $action = __FUNCTION__;
		$bottom = false;
        $footer = true;
        $header = 'header-back';
        
        $blog = Blog::find($id);

        $latest = Blog::limit(2)->latest()->get();

        return view('blog.show', compact('page_title', 'action', 'bottom', 'footer', 'header'), ['blog'=>$blog, 'latest'=>$latest]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(blog $blog)
    {
        //
    }
}
