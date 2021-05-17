<?php

namespace App\Http\Controllers;

use App\Models\photogallery;
use Illuminate\Http\Request;
use Image;
class PhotogalleryController extends Controller
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
        $gallery=photogallery::orderBy('id','desc')->get();
        return view('backend.photogallery')->with('photo',$gallery);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.createphotogallery');
        
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
            'img'=>'required|mimes:jpg,png,jpeg|max:2048',
            'title_en'=>'required',
            'title_np'=>'required',
            'type'=>'required',

        ]);
        $img=$request->file('img');
        $imgname=uniqid().".".$img->getClientOriginalExtension();
        Image::make($img)->resize(500, 300)->save('image/photogallery/'.$imgname);
        $path='image/photogallery/'.$imgname;
        $post=new photogallery;
        $post->img=$path;
        $post->title_en=$request->title_en;
        $post->title_np=$request->title_np;
        $post->type=$request->type;
$post->save();
$notification=array(
    'message'=>"New Photo added sucessfully",

    'alert-type'=>"success",
 );

return redirect()->back()->with($notification);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\photogallery  $photogallery
     * @return \Illuminate\Http\Response
     */
    public function show(photogallery $photogallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\photogallery  $photogallery
     * @return \Illuminate\Http\Response
     */
    public function edit(photogallery $photogallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\photogallery  $photogallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, photogallery $photogallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\photogallery  $photogallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(photogallery $photogallery,$id)
    {
        $photo=photogallery::find($id);
        $photo->delete();
        unlink($photo->img);
        $notification=array(
            'message'=>"Photo Deleted",
        
            'alert-type'=>"success",
         );
        
        return redirect()->back()->with($notification);
    }
}
