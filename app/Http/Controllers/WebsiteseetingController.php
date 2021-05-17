<?php

namespace App\Http\Controllers;

use App\Models\websiteseeting;
use Illuminate\Http\Request;
use Image;
class WebsiteseetingController extends Controller
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
     * @param  \App\Models\websiteseeting  $websiteseeting
     * @return \Illuminate\Http\Response
     */
    public function show(websiteseeting $websiteseeting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\websiteseeting  $websiteseeting
     * @return \Illuminate\Http\Response
     */
    public function edit(websiteseeting $websiteseeting)
    {
        $post=websiteseeting::find(6);
        return view('backend.website',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\websiteseeting  $websiteseeting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, websiteseeting $websiteseeting)
    {
     
        $request->validate([
            'img'=>'required|mimes:jpg,png,jpeg|max:2048',
           
            'email'=>'email',
            

        ]);

 
        $post=websiteseeting::find(6);
        $post->aboutus_en=$request->about_en;
        $post->aboutus_np=$request->about_np;
        $post->email=$request->email;
        $post->phone_en=$request->phone_en;
        $post->phone_np=$request->phone_np;
        $post->address_en=$request->address_en;
        $post->address_np=$request->address_np;
        $post->term_en=$request->term_en;
        $post->term_np=$request->term_np;
        $post->copy=$request->copy;
        $post->developer=$request->developer;
        if($request->img){
            $img=$request->file('img');
            $imgname=uniqid().".".$img->getClientOriginalExtension();
            Image::make($img)->resize(500, 300)->save('image/logo/'.$imgname);
            $path='image/logo/'.$imgname;
            $post->logo=$path;
            // unlink($request->oldimage);
    
        }else{
            $post->logo=$request->oldimage;
    
        }
     $post->save();
     $notification=array(
        'message'=>"Website setting updated",

        'alert-type'=>"success",
     );

return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\websiteseeting  $websiteseeting
     * @return \Illuminate\Http\Response
     */
    public function destroy(websiteseeting $websiteseeting)
    {
        //
    }
}
