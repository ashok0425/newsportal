<?php

namespace App\Http\Controllers;

use App\Models\videogallery;
use Illuminate\Http\Request;

class VideogalleryController extends Controller
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
        $gallery=videogallery::orderBy('id','desc')->get();
        return view('backend.videogallery')->with('photo',$gallery);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.createvideogallery');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'embed_link'=>'required',
            'title_en'=>'required',
            'title_np'=>'required',
            'type'=>'required',

        ]);
    
        $post=new videogallery;
        $post->title_en=$request->title_en;
        $post->title_np=$request->title_np;
        $post->type=$request->type;
        $post->embed_link=$request->embed_link;

$post->save();
$notification=array(
    'message'=>"New video added sucessfully",

    'alert-type'=>"success",
 );

return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\videogallery  $videogallery
     * @return \Illuminate\Http\Response
     */
    public function show(videogallery $videogallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\videogallery  $videogallery
     * @return \Illuminate\Http\Response
     */
    public function edit(videogallery $videogallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\videogallery  $videogallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, videogallery $videogallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\videogallery  $videogallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(videogallery $videogallery,$id)
    {
        $photo=videogallery::find($id);
        $photo->delete();
        $notification=array(
            'message'=>"video Deleted",
        
            'alert-type'=>"success",
         );
        
        return redirect()->back()->with($notification);
    }
    
}
