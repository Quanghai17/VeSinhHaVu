<?php

namespace App\Http\Controllers\Frontend;

use App\Banner;
use App\Customer;
use App\Http\Controllers\Controller;
use App\Pricing;
use App\Product;
use App\Photos;
use App\Customers;
use App\Photo;
use App\Service;
use App\Staticdata;
use App\StaticDatum;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Post;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $banners= Banner::where('type', 'banner')->get();
        $aboutHome = Page::where(['slug' => 'about-home', 'status' => 'ACTIVE'])->first();
        $achievement = Page::where(['slug' => 'thanh-tuu', 'status' => 'ACTIVE'])->first();
        $page = Page::where(['slug' => 'home', 'status' => 'ACTIVE'])->first();
        $aboutUs = Page::where(['slug' => 'about-us-home-page', 'status' => 'ACTIVE'])->first();
        $posts  =   Post::where(['status' => 'PUBLISHED' ])->latest()->limit(3)->get();
        $recruits  =   Post::where(['status' => 'PUBLISHED','slug' => 'tuyen-dung' ])->latest()->limit(1)->get();
        // $recruit  =   Post::where('slug', 'tuyen-dung')->latest()->get();
        $products= Product::where('status', 'ACTIVE')->limit(6)->get();
        $services= Service::where('status', 'ACTIVE')->limit(3)->get();
        // $customers= Customers::where()->limit(3)->get();
        $customers = Customer::where('status', 'ACTIVE')->limit(3)->get();

        $procedures = Staticdata::where('status', 'ACTIVE')->limit(3)->get();
        $partners = Staticdata::where(['type' => 'doi-tac', 'status' => 'ACTIVE'])->get();

        $photos01 = Photo::where(['status'=> 'ACTIVE', 'type' => 'nha-o' ])->limit(6)->get();
        $photos02 = Photo::where(['status'=> 'ACTIVE', 'type' => 'cong-nghiep' ])->limit(6)->get();
        $photos03 = Photo::where(['status'=> 'ACTIVE', 'type' => 'doi-ngu' ])->limit(6)->get();

        return view('frontend.homepage.index', compact('aboutHome', 'banners', 'achievement', 'page', 'aboutUs', 'posts', 'products', 'services','procedures', 'partners','recruits','customers','photos01','photos02','photos03'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
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
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * return redirect to contact blade.
     */
    public function contact()
    {
        return view('frontend.contact.index');
    }

}
