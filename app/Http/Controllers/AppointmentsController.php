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
        // dd( $user_id);
        return view('inc.ajaxRequest');
    }
    public function ajaxRequest()

    {
        
        // return view('inc.ajaxRequest');
        return redirect('posts/calendar')->with("success", "Booked");

    }
     
    public function ajaxRequestPost(Request $request)

    {
        $array=[];
        // return "123";
        //  dd($request);
        // $input = $request->all();
        $input = $request->all();
        // return view("inc.ttt")->with('input', $input);
    //    dd($request);

        foreach ($input as $key => $value) {
            echo $key."-".$value."<br>";
            // array_push($array,[$key=>$value]);
            array_push($array,$value);
        }
        // dd($array[0]);
        $data = array('name'=>$array[3], 'phone'=>'444', 'pgender'=>'male');
        // dd($data);
        // DB::table('orthops')->insert($data);
        
        // return response()->json(['success'=>'Got Simple Ajax Request.']);
        // return response()->json([]);
        $post = new Appointment();
        $post->name=$array[3];
        $post->phone=$array[4];
        // $post->pgender="male";
        $post->user_id=$array[1];
        $post->schedule_end=$array[0]."T".$array[2];
        // dd($post->schedule_end);
       if($post->save()){
        
       }
           
        
        
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
