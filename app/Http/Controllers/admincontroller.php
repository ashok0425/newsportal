<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class admincontroller extends Controller
{
    public function __construct(){
		$this->middleware('auth');
	}
   public  function logout()
   {
      Auth::logout();
      return redirect()->route('login')->with('msg',"You are logout...");
   }
   public  function editprofile()
   {
      
      return view('backend.changepass');
   }
  

   public  function  updateprofile()
   {
      
      return view('backend.editprofile');
   }
   public function updatepass(Request $r){//updating password
      $r->validate([
          'current_password'=>'required',
          'password'=>'required|confirmed|min:8',
      ]);

      if(Hash::check($r->current_password, Auth::user()->password)){
      $user=user::find(Auth::user()->id);
      $user->password=Hash::make($r->password);
      $user->save();
$notification=array(
   'message'=>'Password updated',
   'alert-type'=>'success',

);
return view('admin.index')->with('msg',$notification);
       }
       $notification=array(
         'message'=>'Incorrect Password',
         'alert-type'=>'error',
      
      );
return redirect()->back()->with($notification);
    }
    public function saveprofile(Request $request){//update profile
      $user=user::find(Auth::user()->id);
      $notification=array(
         'message'=>'profile updated',
         'alert-type'=>'success',
      
      );
  if($user){
  
      if($request->file('file')){
          $request->validate([
              'file'=>'mimes:jpg,png,jpeg|max:2048',
   
          ]);
      $img_ext=$request->file('file')->getClientOriginalExtension();
      $img_name=rand().".$img_ext";
      \Storage::delete('public/'.$user->profile_photo_path);
      $request->file('file')->storeAs('public/',$img_name);
      $user->email=$request->email;
      $user->name=$request->username;
      $user->profile_photo_path=$img_name;
      $user->save(); 
     
  return redirect()->back()->with($notification);
      }
      else{
          $user->email=$request->email;
      $user->name=$request->username;
  $user->save(); 
  return redirect()->back()->with($notification);
  
      }
  }
  return redirect()->back();
  
      }
  }
