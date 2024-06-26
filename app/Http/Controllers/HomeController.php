<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHomeRequest;
use App\Http\Requests\UpdateHomeRequest;
use App\Models\Home;
use App\Models\Ads;
use Illuminate\Support\Facades\DB;
use App\Models\Category;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category =Category::where('status', '=',1)->get();

        $ads = DB::table('ads')
        ->leftJoin('categories', 'categories.id', '=', 'ads.category_id')
        ->leftJoin('sub_categories', 'sub_categories.id', '=', 'ads.sub_category_id')
        ->leftJoin('cities', 'cities.id', '=', 'ads.city_id')
        ->leftJoin('images', 'images.ads_id', '=', 'ads.id')
        ->select('ads.*', 'categories.name as cname', 'sub_categories.name as subname','images.link as imageLink')
        ->where('images.status',1)->get();

        return view("front.index", compact('category','ads'));
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
     * @param  \App\Http\Requests\StoreHomeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHomeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        print_r('hello');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHomeRequest  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHomeRequest $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }
    public function loadLocation(){
        $ads = DB::table('cities')
        ->leftJoin('districts', 'districts.id', '=', 'cities.district_id')
        ->select('cities.*', 'cities.name as cities', 'districts.name as subname','images.link as imageLink')
        ->where('images.status',1)->get();
    }
}
