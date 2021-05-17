<?php

namespace App\Http\Controllers;

use App\Models\socials;
use Illuminate\Http\Request;

class SocialsController extends Controller
{
    public function __construct(){
		$this->middleware('auth');
	}
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\socials  $socials
     * @return \Illuminate\Http\Response
     */
    public function show(socials $socials)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\socials  $socials
     * @return \Illuminate\Http\Response
     */
    public function editsocial(socials $socials)
    {
        $links=socials::find(1);
        return view('backend.editsocial')->with("social",$links);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\socials  $socials
     * @return \Illuminate\Http\Response
     */
    public function updatesocial(Request $request, socials $socials)
    {
        $links=socials::find(1);
        $links->facebook=$request->facebook;
        $links->twitter=$request->twitter;
        $links->instagram=$request->instagram;
        $links->linkedin=$request->linkedin;
        $links->youtube=$request->youtube;
        $links->save();
        $notification=array(
            'message'=>"social links updated",
    
            'alert-type'=>"success",
         );
         return redirect()->back()->with($notification);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\socials  $socials
     * @return \Illuminate\Http\Response
     */
    public function destroy(socials $socials)
    {
        //
    }
}
