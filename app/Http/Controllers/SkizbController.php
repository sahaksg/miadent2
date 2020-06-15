<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Skizb;
use App\Orthop;
use App\Initials;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Schema; //might be not needed

class SkizbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $array1 = [1, 2, 3];
    public function index()
    {
        $user_id = auth()->user()->id;
        $skizbs = Skizb::all();
        // dd($skizbs);
        // return view('pages.initial_home')->with('skizbs', $skizbs);
        return view('skizbs.initial_index')->with('skizbs', $skizbs)->with('userid', $user_id);
    }

    public function searchinit($id)
    {
        $searchKey = \Request::get('name');
        // dd($searchKey);
        // $post = Post::where('name', 'like', '%'.$searchKey.'%')->orderBy('id');


        // $posts= Orthop::where('name', 'like', '%'.$searchKey.'%')->paginate(6);
        // $posts= DB::query("SELECT * FROM orthops WHERE name LIKE '%$searchKey% AND WHERE'");
        $skizbs = DB::table("skizbs")->where('name', 'like', "%$searchKey%")->where('user_id', $id)->paginate(6);
        // dd($skizbs);

        return view('skizbs.search')->with('skizbs', $skizbs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skizbs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return "123";
        // dd($request);
        $this->validate($request, [

            "name" => "",
            "phone" => "",
            "gender" => "",
            "t28" => "",
            "t27" => "",
            "t26" => "",
            "t25" => "",
            "t24" => "",
            "t23" => "",
            "t22" => "",
            "t21" => "",
            "t11" => "",
            "t12" => "",
            "t13" => "",
            "t14" => "",
            "t15" => "",
            "t16" => "",
            "t17" => "",
            "t18" => "",
            "t48" => "",
            "t47" => "",
            "t46" => "",
            "t45" => "",
            "t44" => "",
            "t43" => "",
            "t42" => "",
            "t41" => "",
            "t31" => "",
            "t32" => "",
            "t33" => "",
            "t34" => "",
            "t35" => "",
            "t36" => "",
            "t37" => "",
            "t38" => "",
        ]);
        $post = new Orthop();
        $post->name = $request->input('name');
        $post->phone = $request->input('phone');
        $post->pgender = $request->input('gender');
        $post->user_id = auth()->user()->id;
        // $post->pat_image = 'noimage.jpg';
        $post->save();

        $skizb = new Skizb();
        $skizb->name = $request->input('name');
        $skizb->pgender = $request->input('gender');
        $skizb->phone = $request->input('phone');
        $skizb->user_id = auth()->user()->id;
        $skizb->t11 = $request->input('t11');
        $skizb->t12 = $request->input('t12');
        $skizb->t13 = $request->input('t13');
        $skizb->t14 = $request->input('t14');
        $skizb->t15 = $request->input('t15');
        $skizb->t16 = $request->input('t16');
        $skizb->t17 = $request->input('t17');
        $skizb->t18 = $request->input('t18');
        $skizb->t21 = $request->input('t21');
        $skizb->t22 = $request->input('t22');
        $skizb->t23 = $request->input('t23');
        $skizb->t24 = $request->input('t24');
        $skizb->t25 = $request->input('t25');
        $skizb->t26 = $request->input('t26');
        $skizb->t27 = $request->input('t27');
        $skizb->t28 = $request->input('t28');
        $skizb->t31 = $request->input('t31');
        $skizb->t32 = $request->input('t32');
        $skizb->t33 = $request->input('t33');
        $skizb->t34 = $request->input('t34');
        $skizb->t35 = $request->input('t35');
        $skizb->t36 = $request->input('t36');
        $skizb->t37 = $request->input('t37');
        $skizb->t38 = $request->input('t38');
        $skizb->t41 = $request->input('t41');
        $skizb->t42 = $request->input('t42');
        $skizb->t43 = $request->input('t43');
        $skizb->t44 = $request->input('t44');
        $skizb->t45 = $request->input('t45');
        $skizb->t46 = $request->input('t46');
        $skizb->t47 = $request->input('t47');
        $skizb->t48 = $request->input('t48');
        $skizb->save();

        return redirect('/skizbs')->with('userid', $skizb->user_id)->with('success', 'Patient Created');;
        // return redirect()->back()->withSuccess('Patient Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        // $data= Skizb::where('user_id', $id);
        $skizb = Skizb::find($id);
        // $db= DB::query("SELECT column_name FROM information_schema.columns WHERE table_name='skizbs' AND column_name LIKE 't%' ");
        // $newdate = date('c', strtotime($post->schedule_end));
        // $db1= DB::table("skizbs")->where('name', 'like', "%$searchKey%")->where('user_id', $id)->paginate(6);
        // dd($skizb);
        // $patient = new Skizb();
        // $columns = $patient->getTableColumns();
        // print_r($columns);
        // dd($skizb);



        return view('skizbs.show')->with('skizb', $skizb);
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
