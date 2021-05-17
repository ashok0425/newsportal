<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use sesion;
use App\Models\post;
use App\Models\subdistrict;
use App\Models\photogallery;
use App\Models\videogallery;
class extracontroller extends Controller
{
    public function english(){
        session()->get('lang');
        session()->forget('lang');
        session()->put('lang','english');
return redirect()->back();


    }
    public function nepali(){
        session()->get('lang');
        session()->forget('lang');
        session()->put('lang','nepali');
return redirect()->back();


    }
    public function singlepage($id){
        $singlepost=post::find($id);
        $relatedpost=post::inRandomOrder()->limit(6)->get();

     return view('frontend.singlepage',compact('singlepost','relatedpost'));


    }

 
    public function about(){

   return view('frontend.about');


  }
  public function term(){

 return view('frontend.term');


}
    public function CatPost($catid=null,$category_en=null,$subid=null,$subcategory_en=null){
      if($catid!=='sub'){
        $catposts = post::where('category_id',$catid)->orderBy('id','desc')->paginate(8);
        $catfirstposts = post::where('category_id',$catid)->orderBy('id','desc')->first();
      }else{
        $catposts = post::where('subcategory_id',$subid)->orderBy('id','desc')->paginate(8);
        $catfirstposts = post::where('subcategory_id',$subid)->orderBy('id','desc')->first();
      }
      
   
     
        if(  $catfirstposts){
            return view('frontend.archive',compact('catposts','catfirstposts'));

        }else{
            return redirect()->route('/');
        }
    
      }

      public function GetSubDist($district_id){
        $sub = subdistrict::where('district_id',$district_id)->get();
        return response()->json($sub);
    }
  
  
    public function SearchDistrict(Request $request){
      $distid = $request->district_id;
      $subdistid = $request->subdistrict_id;
      if(!$distid){
        return redirect()->back();
  
        }
      if(!$subdistid){
      return redirect()->back();

      }
    $catposts = post::where('district_id',$distid)->where('subdistrict_id',$subdistid)->orderBy('id','desc')->get();
    $singlepost= post::where('district_id',$distid)->where('subdistrict_id',$subdistid)->orderBy('id','desc')->first();
      return view('frontend.allpost',compact('catposts','singlepost'));
  
    }
  
}
