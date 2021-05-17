<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\district;
use App\Models\subcategory;
use App\Models\subdistrict;
use Auth;
use Image;

class PostController extends Controller
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
        $posts=post::orderBy('id','desc')->get();
        return view('backend.post')->with('sub',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=category::all();
        $district=district::all();
        return view('backend.createpost',compact('category','district'));
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
            'category'=>'required',
            'title_np'=>'required|max:255',
            'tags_np'=>'required|max:255',

        ]);
        $img=$request->file('img');
        $imgname=uniqid().".".$img->getClientOriginalExtension();
        Image::make($img)->resize(500, 300)->save('image/postimage/'.$imgname);
        $path='image/postimage/'.$imgname;
        $post=new post;
        $post->category_id=$request->category;
        $post->subcategory_id=$request->subcategory;
        $post->district_id=$request->district;
        $post->subdistrict_id=$request->subdistrict;
        $post->user_id=Auth::user()->id;
        $post->title_np=$request->title_np;
        $post->img=$path;
        $post->detail_np=$request->detail_np;
        $post->tags_np=$request->tags_np;
        $post->headline=$request->headline;
        $post->first_section=$request->first_section;
        $post->first_section_thumbnail=$request->first_section_thumbnail;
        $post->big_thumbnail=$request->bigthumbnail;
        $post->post_date=date("d-m-Y");
        $post->post_month=date("F");
    
     $post->save();
     $notification=array(
        'message'=>"New Post sucessfully",

        'alert-type'=>"success",
     );

return redirect()->back()->with($notification);



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post,$id)
    {
        $category=category::all();
        $district=district::all();
        $subdistrict=subdistrict::all();
        $subcategory=subcategory::all();


        $post=post::find($id);

       
        return view('backend.editpost',compact('category','district','post','subcategory','subdistrict'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post,$id)
    {
        $request->validate([
            'img'=>'mimes:jpg,png,jpeg|max:2048',
            'category'=>'required',
            'district'=>'required',
            'title_np'=>'required|max:255',
            'tags_np'=>'required|max:255',

        ]);
      
        $post=post::find($id);
        $post->category_id=$request->category;
        $post->subcategory_id=$request->subcategory;
        $post->district_id=$request->district;
        $post->subdistrict_id=$request->subdistrict;
        $post->user_id=Auth::user()->id;
        $post->title_np=$request->title_np;
        $post->detail_np=$request->detail_np;
        $post->tags_np=$request->tags_np;
        $post->headline=$request->headline;
        $post->first_section=$request->first_section;
        $post->first_section_thumbnail=$request->first_section_thumbnail;
        $post->big_thumbnail=$request->bigthumbnail;
        $post->post_date=date("d-m-Y");
        $post->post_month=date("F");
    if($request->img){
        $img=$request->file('img');
        $imgname=uniqid().".".$img->getClientOriginalExtension();
        Image::make($img)->resize(500, 300)->save('image/postimage/'.$imgname);
        $path='image/postimage/'.$imgname;
        $post->img=$path;
        unlink($request->oldimage);

    }else{
        $post->img=$request->oldimage;

    }
     $post->save();
     $notification=array(
        'message'=>"Post updated",

        'alert-type'=>"success",
     );

return redirect()->route('admin.post')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post,$id)
    {
        $post=post::find($id);
        $post->delete();
        unlink($post->img);
        $notification=array(
            'message'=>"Post deleted",
    
            'alert-type'=>"success",
         );
         return redirect()->back()->with($notification);
    }
    public function getsubcategory($cat_id)
    {
        $sub=subcategory::where("category_id",$cat_id)->get();
        return response()->json($sub);
        
    }
    public function getsubdistrict($cat_id)
    {
        $sub=subdistrict::where("district_id",$cat_id)->get();
        return response()->json($sub);
        
    }
}
