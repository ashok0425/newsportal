<?php

namespace App\Http\Controllers;

use App\Models\notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
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
     * @param  \App\Models\notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(notice $notice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit(notice $notice)
    {
        $links=notice::find(1);
        return view('backend.editnotice')->with("notice",$links);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, notice $notice)
    {
        $livetv=notice::find(1);
        $livetv->notice=$request->notice;
        $livetv->save();
        $notification=array(
            'message'=>'Notice Updated',
            'alert-type'=>'success'

        );
        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy(notice $notice)
    {
        //
    }
    public function active(notice $notice)
    {
        $livetv=notice::find(1);
         $livetv->status=1;
         $livetv->save();
        $notification=array(
            'message'=>'Notice Activated succesfuly',
            'alert-type'=>'success'

        );
        return redirect()->back()->with($notification);
    }
    public function deactive(notice $notice)
    {
        $livetv=notice::find(1);
        $livetv->status=0;
        $livetv->save();

        $notification=array(
            'message'=>'Notice Deactived succesfuly',
            'alert-type'=>'success'

        );
        return redirect()->back()->with($notification);
    }
}
