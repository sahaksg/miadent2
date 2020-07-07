<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\User;
use App\Orthop;
use App\Appointment;
use App\Skizb;
use DB;
use Illuminate\Contracts\Session\Session;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $user_id=auth()->user()->id;
        $data = DB::table("appointments")
            ->select('id', 'name', 'phone','note','schedule_end', 'user_id')->where('user_id',$user_id)->get();
        // dd( $data);
        return view('pages.rrr')->with('data', $data);
        // return view('inc.ajaxRequest');
    }
    public function test11(Request $request){

        // dd($request->all());
        $array=[];      
        $input = $request->all();
        foreach ($input as $key => $value) {
           array_push($array,$value);
        }
        // dd($array[4]."T".$array[3]);
        $post = new Appointment();
        $post->name=$array[0];
        $post->phone=$array[1];       
        $post->note=$array[2];       
        $post->schedule_end=$array[4]."T".$array[3];
        $post->user_id=$array[5];       
       
       if($post->save()){
         return redirect()->back()->with("success", "Appointment is Booked!");
       }

    }
    public function ajaxRequest()

    {
        // return "123";
        // return view('inc.ajaxRequest');
        // return redirect('posts/calendar')->with("success", "Booked");

    }
     
    public function ajaxRequestPost(Request $request)

    {
        // dd($request);
    //     $array=[];
      
    //     $input = $request->all();
    

    //     foreach ($input as $key => $value) {
    //         echo $key."-".$value."<br>";
           
    //         array_push($array,$value);
    //     }
       
    //     $data = array('name'=>$array[3], 'phone'=>'444', 'pgender'=>'male');
       
    //     $post = new Appointment();
    //     $post->name=$array[3];
    //     $post->phone=$array[4];
       
    //     $post->user_id=$array[1];
    //     $post->schedule_end=$array[0]."T".$array[2];
       
    //    if($post->save()){
        
    //    }
           
        
        
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
