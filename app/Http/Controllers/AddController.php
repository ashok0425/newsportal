<?php

namespace App\Http\Controllers;

use App\Models\add;
use Illuminate\Http\Request;
use Image;
class AddController extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery=add::orderBy('id','desc')->get();
        return view('backend.addlist')->with('add',$gallery);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.createadd');
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
            'img'=>'required|mimes:jpg,png,jpeg,gif|max:2048',
            'page'=>'required',
            'place'=>'required',

        ]);
        $img=$request->file('img');
        $imgname=uniqid().".".$img->getClientOriginalExtension();
        Image::make($img)->save('image/adds/'.$imgname);
        $path='image/adds/'.$imgname;
        $post=new add;
        $post->img=$path;
        $post->link=$request->link;
        $post->page=$request->page;
        $post->place=$request->place;
$post->save();
$notification=array(
    'message'=>"New Add added sucessfully",

    'alert-type'=>"success",
 );

return redirect()->back()->with($notification);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\add  $add
     * @return \Illuminate\Http\Response
     */
    public function show(add $add)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\add  $add
     * @return \Illuminate\Http\Response
     */
    public function edit(add $add)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\add  $add
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, add $add)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\add  $add
     * @return \Illuminate\Http\Response
     */
    public function destroy(add $add,$id)
    {
        $photo=add::find($id);
        $photo->delete();
        unlink($photo->img);
        $notification=array(
            'message'=>"Add Deleted",
        
            'alert-type'=>"success",
         );
        
        return redirect()->back()->with($notification);
    }
}
