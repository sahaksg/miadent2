<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Orthop;
use DB;

class PagesController extends Controller
{
    public function index()
    {
        $title="Index Page!";
        return view('pages.index', compact('title'));
    }

    public function startup()
    {
        $title="Start Up Page";
        return view('pages.startup')->with('title', $title);
    }

    public function services()
    {
        $data=[
            'title'=> 'Services Page',
            'treatments'=>[
                'therapy',
                'orthopedy',
                'surgery'
            ]
            
        ];
        return view('pages.services')->with($data);
    }
    public function services1()
    {
        $data=[
            'title'=> 'Services Page',
            'treatments'=>[
                'therapy',
                'orthopedy',
                'surgery'
            ]
            
        ];
        return view('pages.services1')->with($data);
    }
    public function init0()
    {
        // $searchKey =\Request::get('name');
        // dd($id);
        // return "123";
        // $post = Post::where('name', 'like', '%'.$searchKey.'%')->orderBy('id');
        
        
        // $posts= Orthop::where('name', 'like', '%'.$searchKey.'%')->paginate(6);
        // $posts= DB::query("SELECT * FROM orthops WHERE name LIKE '%$searchKey% AND WHERE'");
        // $posts= DB::table("orthops")->where('name', 'like', "%$searchKey%")->where('user_id', $id)->paginate(6);
        // dd($posts);
        
        return view('pages.init0');
        
    }
    public function init1()
    {
        // $searchKey =\Request::get('name');
        // dd($id);
        // return "123";
        // $post = Post::where('name', 'like', '%'.$searchKey.'%')->orderBy('id');
        
        
        // $posts= Orthop::where('name', 'like', '%'.$searchKey.'%')->paginate(6);
        // $posts= DB::query("SELECT * FROM orthops WHERE name LIKE '%$searchKey% AND WHERE'");
        // $posts= DB::table("orthops")->where('name', 'like', "%$searchKey%")->where('user_id', $id)->paginate(6);
        // dd($posts);
        
        return view('pages.init');
        
    }

    public function orthopedy()
    {
        $title="Orthopedy Up Page";
        return view('pages.orthopedy')->with('title', $title);
    }

    public function surgery()
    {
        $title="Surgery Up Page";
        return view('pages.surgery')->with('title', $title);
    }

    public function therapy()
    {
        $title="Therapy Up Page";
        return view('pages.therapy')->with('title', $title);
    }
    
}
