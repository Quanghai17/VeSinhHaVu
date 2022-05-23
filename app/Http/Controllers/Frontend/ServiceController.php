<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Staticdata;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staticdatas= Staticdata::where('status', 'ACTIVE')->limit(3)->get();

        return view('frontend.service.index', compact( 'staticdatas'    ));
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
      $service= Staticdata::where([ 'slug' => $slug])->first();
      $service01= Staticdata::latest()->get();
      $staticdatas= Staticdata::where('slug', $slug)->first();
      $title= $service->title ?? "";
      $pageMeta = [
        'title' => $title,
        'meta_description' => $title,
        'image' => setting('site.logo'),
      ];
      return view('frontend.service.detail', compact( 'service', 'title', 'staticdatas','service01'));
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
