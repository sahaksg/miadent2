<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;
use App\Post;
use App\Orthop;
use App\Initials;
use DB;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use Illuminate\Support\Facades\Schema; //might be not needed



class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // $posts= Post::orderBy('created_at', 'DESC')->get();
        // $posts= Post::orderBy('created_at', 'DESC')->take(1)->get();
        $orthops = Orthop::orderBy('created_at', 'DESC')->paginate(6);
        // paginage not used for my case as i have table, commented also in posts.index
        // $posts= DB::select('SELECT * FROM posts');
        // $posts=Post::all();
        return view('posts.index')->with('posts', $orthops);
    }

    // New Fullcalendar for admin used now for admin
    public function calendar()
    {
        $events = [];
        $data = Orthop::all();
        // dd($data);
        if ($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->name,
                    false,
                    new \DateTime($value->schedule_end),
                    new \DateTime($value->schedule_end . '+1 hour'),

                    null,
                    // Add url

                    [
                        'url' => "/posts/" . $value->id
                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('posts/calendar')->with('calendar', $calendar)->with("id", '0');
    }

    // New changed calendar for each user to see its own patients on calendar
    // performed change to show data from 2 tables with union
    public function    calendarall($id)
    {

        $events = [];

        $data = DB::table("orthops")
            ->select('id', 'name', 'schedule_end', 'user_id')
            ->where('user_id', $id);

        $total = DB::table("appointments")
            ->select('id', 'name', 'schedule_end', 'user_id')
            ->where('user_id', $id)
            ->union($data)
            ->get();



        if (count($total)) {
            foreach ($total as $item) {
                // dd($item);
                $events[] = Calendar::event(
                    $item->name,
                    false,
                    new \DateTime($item->schedule_end),
                    new \DateTime($item->schedule_end . '+1 hour'),
                    null,
                    // Add url
                    [
                        // 'url' => "/posts/".$item->id
                        // 'url' => "#"
                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('posts/calendar')->with('calendar',  $calendar)->with("id", $id);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function search_in_db()
    // {
    //     
    // }
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store1(Request $request) //was for Add patient
    {
        // return "123";
        // dd($request);
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'gender' => '',
            'ceramics' => '',
            'ceramictooth' => '',
            'toothBridge' => '',
            'toothBr' => '',
            'zirkon' => '',
            'zirkontooth' => '',
            'dentalCrown' => '',
            'crowntooth' => '',
            'damaskTooth' => '',
            'damasktooth' => '',
            'remove' => '',
            'crean' => '',
            'inplant' => '',
            'scale' => '',
            'fill' => '',
            'endos' => '',
            'cosm' => '',
            'comp' => '',
            'retreat' => '',
            'rcf' => '',
            'notes' => '',
            'image' => 'image|nullable|max:1999',
            'datetime' => '',
            // 'pat_image'=>'image|nullable|max:1999',

            // 'schedule' => '',
            // 'timepicker' => '',



        ]);
        // dd($request);
        // Handle File Upload
        if ($request->hasFile('image')) {
            // dd($request->image);
            // Get full filename
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            // dd($fileNameWithExt);
            // Get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // dd($fileName);

            //Get just extension
            $extention = $request->file('image')->getClientOriginalExtension();
            // dd($extention);
            // File nale to store
            $filenameToStore = $fileName . '_' . time() . '.' . $extention;
            // dd($filenameToStore);
            // Upload the image
            $p = 'public/pat_images/' . $request->name . '';
            $path = $request->file('image')->storeAs($p, $filenameToStore);
            // dd($path);


        } else {
            $filenameToStore = 'noimage.jpg';
            // dd($filenameToStore);
        }


        $post = new Orthop();
        $post->name = $request->input('name');
        $post->phone = $request->input('phone');
        $post->pgender = $request->input('gender');
        $post->user_id = auth()->user()->id;
        $post->ceramics = $request->input('ceramictooth');
        $post->tbridge = $request->input('toothBr');
        $post->zirkon = $request->input('zirkon');
        $post->dcrown = $request->input('crown');
        $post->dtooth = $request->input('damask');
        $post->remove = $request->input('remove');
        $post->scale = $request->input('scale');
        $post->clean = $request->input('clean');
        $post->inplant = $request->input('inplant');
        $post->fill = $request->input('fill');
        $post->endos = $request->input('endos');
        $post->cosm = $request->input('cosm');
        $post->comp = $request->input('comp');
        $post->retreat = $request->input('retreat');
        $post->rcf = $request->input('rcf');
        $post->notes = $request->input('notes');
        $post->pat_image = $filenameToStore;
        // $post->schedule = $request->input('schedule');
        // $post->schedule_time = $request->input('timepicker');
        // dd($filenameToStore);

        $post->schedule_end = $request->input('datetime');

        $post->save();
        return redirect('/dashboard')->with('success', 'Patient Created');
    }

    // Initial patients

    public function store2(Request $request)
    {

        // return "123";
        // dd($request->p_id);

        $this->validate($request, [

            'ttt' => '',
            'endo' => '',
            'fill' => '',
            'crown' => '',
            'extr' => '',
            'pname' => '',
            'p_id' => '',
        ]);

        $data = [$request->endo, $request->fill, $request->crown, $request->extr];
        foreach ($data as $item) {
            if (is_null($item)) {
            } else {
                $data_not_null = $item;
            }
        }
        // dd($data_not_null);
        $pat_id = $request->p_id;
        // dd($pat_id);
        $atam = $request->ttt;
        // dd($atam);
        $t_atam = "t" . $atam;
        // dd($t_atam);


        $patient_to_update = Initials::find($pat_id);

        $columns = $patient_to_update->getTableColumns();

        // dd($columns);

        foreach ($columns as $column) {
            if ($column == $t_atam) {
                // dd($t_atam);

                $patient_to_update->$t_atam = $data_not_null;
            }
        }
        $patient_to_update->save();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        $post = Orthop::find($id);
        // dd($post);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Orthop::find($id);



        // dd($post);
        return view('posts.edit')->with('post', $post);
        // return view('posts.edit');

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
        // dd($request);
        // return "Update";
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'gender' => '',
            'ceramics' => '',
            'ceramictooth' => '',
            'toothBridge' => '',
            'toothBr' => '',
            'zirkon' => '',
            'zirkontooth' => '',
            'dentalCrown' => '',
            'crowntooth' => '',
            'damaskTooth' => '',
            'damasktooth' => '',
            'remove' => '',
            'crean' => '',
            'inplant' => '',
            'scale' => '',
            'fill' => '',
            'endos' => '',
            'cosm' => '',
            'comp' => '',
            'retreat' => '',
            'rcf' => '',
            'notes' => '',
            // 'image'=>'image|nullable|max:1999',
            'datetime' => '',
        ]);

        // Create Patient
        $post = Orthop::find($id);
        // dd($post);

        // if($request->hasFile('image')){
        //     // dd($request->image);
        //     // Get full filename
        //     $fileNameWithExt=$request->file('image')->getClientOriginalName();
        //     // dd($fileNameWithExt);
        //     // Get just file name
        //     $fileName=pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        //     // dd($fileName);

        //     //Get just extension
        //     $extention=$request->file('image')->getClientOriginalExtension();
        //     // dd($extention);
        //     // File nale to store
        //     $filenameToStore=$fileName.'_'.time().'.'.$extention;
        //     // dd($filenameToStore);
        //     // Upload the image
        //     $p='public/pat_images/'.$request->name.'';
        //     $path=$request->file('image')->storeAs($p, $filenameToStore);
        //     // dd($path);


        // }else{
        //     $filenameToStore = 'noimage.jpg';
        //     // dd($filenameToStore);
        // }




        // dd($post->pat_image);
        // dd($request->input('schedule'));
        $post->name = $request->input('name');
        $post->phone = $request->input('phone');
        $post->pgender = $request->input('gender');
        $post->ceramics = $request->input('ceramictooth');
        $post->tbridge = $request->input('toothBr');
        $post->zirkon = $request->input('zirkon');
        $post->dcrown = $request->input('dcrown');
        $post->dtooth = $request->input('damask');
        $post->remove = $request->input('remove');
        $post->scale = $request->input('scale');
        $post->clean = $request->input('clean');
        $post->inplant = $request->input('inplant');
        $post->fill = $request->input('fill');
        $post->endos = $request->input('endos');
        $post->cosm = $request->input('cosm');
        $post->comp = $request->input('comp');
        $post->retreat = $request->input('retreat');
        $post->rcf = $request->input('rcf');
        $post->notes = $request->input('notes');
        $post->schedule_end = $request->input('datetime');
        // $post->pat_image = $filenameToStore;
        // $post->schedule = $request->input('schedule');
        // $post->schedule_time = $request->input('timepicker');
        // dd($post->schedule_end);

        $post->save();
        return redirect('/dashboard')->with('success', 'Patient Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Orthop::find($id);
        // dd($post);
        $post->delete();
        return redirect('/dashboard')->with('success', 'Patient Deleted');
    }
    //seach for admin to see all patients
    public function search()
    {
        $searchKey = \Request::get('name');
        // $post = Post::where('name', 'like', '%'.$searchKey.'%')->orderBy('id');


        // $posts= Orthop::where('name', 'like', '%'.$searchKey.'%')->paginate(6);
        // $posts= DB::query("SELECT * FROM orthops WHERE name LIKE '%$searchKey% AND WHERE'");
        $posts = DB::table("orthops")->where('name', 'like', "%$searchKey%")->paginate(6);
        // dd($posts);

        return view('posts.search')->with('posts', $posts);
    }
    //search for each doctor to search his patients only
    public function searcheach($id)
    {
        $searchKey = \Request::get('name');
        // dd($searchKey);
        // $post = Post::where('name', 'like', '%'.$searchKey.'%')->orderBy('id');


        // $posts= Orthop::where('name', 'like', '%'.$searchKey.'%')->paginate(6);
        // $posts= DB::query("SELECT * FROM orthops WHERE name LIKE '%$searchKey% AND WHERE'");
        $posts = DB::table("orthops")->where('name', 'like', "%$searchKey%")->where('user_id', $id)->paginate(6);
        // dd($posts);

        return view('posts.search')->with('posts', $posts);
    }
}
