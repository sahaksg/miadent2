<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Orthop;
use App\Skizb;
use DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        // dd($user->posts);
        $data = array(
            'user' => $user,
            'posts' => $user->posts
        );
        // dd($data);

        // return view('dashboard')->with('posts', $user->posts);
        return view('dashboard')->with($data);
    }
    public function editschedule()
    {

        // $posts= Post::orderBy('created_at', 'DESC')->get();
        // $posts= Post::orderBy('created_at', 'DESC')->take(1)->get();
        $orthops = Orthop::orderBy('created_at', 'DESC')->paginate(6);
        // paginage not used for my case as i have table, commented also in posts.index
        // $posts= DB::select('SELECT * FROM posts');
        // $posts=Post::all();


        return view('dashboard.editschedule')->with('posts', $orthops);
    }
    public function updatetime(Request $request)
    {
        dd($request);
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
