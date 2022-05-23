<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Recruit;
use TCG\Voyager\Models\Category;
class RecruitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recruits  =   Recruit::where(['status' => 'PUBLISHED' ])->latest()->limit(3)->get();
        $title= $page->title ?? "Bài viết";
        $blogs= Recruit::paginate(12);
        $pageMeta = [
            'title' => $title,
            'meta_description' => $title,
            'image' => setting('site.logo'),
        ];
        return view('frontend.recruit.index', compact( 'blogs', 'title', 'pageMeta', 'recruits'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $blog= Recruit::where('slug', $slug)->first();
        $title= $blog->title ?? "";
        $recentPost= Recruit::where(['status' => 'PUBLISHED'])->get();
        $categories= Category::withCount('posts')->get();
        $page = [
            'title' => $title,
            'meta_description' => $blog->meta_description,
            'image' => $blog->image,
        ];
        return view('frontend.recruit.blogDetail', compact('blog', 'title', 'recentPost', 'categories', 'page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
