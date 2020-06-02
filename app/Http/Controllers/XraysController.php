<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Orthop;
use App\Skizb;
use DB;

class XraysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id=auth()->user()->id;
        $user = User::find($user_id);
        $data = array (
            'user'=>$user,
            'posts'=>$user->posts  
        );
        return view('xrays.index')->with($data);
    }
    public function search()
    {
        // return "123";
        $searchKey =\Request::get('name');
        $posts= DB::table("orthops")->where('name', 'like', "%$searchKey%")->paginate(5);
        // dd($posts);
        return view('xrays.search')->with('posts', $posts);
       
        
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
        // dd($id);
        $posts = Orthop::find($id);
        // dd($posts);
        return view('xrays.show')->with('posts', $posts);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "Edit!";
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
    //    return "Update!";
    // dd($request->images);
            // $this->validate($request, [
            //     'images' =>'array',
            //     'images.*'=>'image|nullable|max:1999',

            // ]);
            // $images_array_to_db=[];
            // if($request->hasFile('images')){
            //     $image_array=$request->file('images');
            //     $array_lenght=count($image_array);
                
            //     for($i=0; $i<$array_lenght; $i++){
            //         $image_ext=$image_array[$i]->getClientOriginalExtension();
            //         $image_full_name=$image_array[$i]->getClientOriginalName();
            //         $file_name_witoutExt=pathinfo($image_full_name, PATHINFO_FILENAME);
            //         $new_image_name=$file_name_witoutExt.time().".".$image_ext;  
            //         // echo $new_image_name."<br>";
            //         $destination_path='public/pat_images/'.$request->name.'';
            //         $path=$image_array[$i]->storeAs($destination_path, $new_image_name);
            //         array_push($images_array_to_db, $new_image_name);
            //     }
                
            //     $js=json_encode($images_array_to_db);
            //     $post=Orthop::find($id);
               
            //         $post->pat_image= $js ;
            //         $post->save();
            //         return redirect()->back()->with('msg', 'Image uploaded succesfully');
            //     }else{
            //         return back()->with('msg', 'please select image');
            //     }
    
                //  }   
                //  $post->save()
                // $post->pat_image=$images_array_to_db;
                // if($post->save()){
                //     return redirect()->back()->with('msg', 'Image uploaded succesfully');
                // }else{
                //     return redirect()->back()->with('msg', 'Image not uploaded');
                // }

                
                // in case of single image below
               
                $image=$request->file('image');
                $image_size=$image->getClientSize();
                $image_full_name=$image->getClientOriginalName();
                $file_name_witoutExt=pathinfo($image_full_name, PATHINFO_FILENAME);
                $image_ext=$image->getClientOriginalExtension();
                $new_image_name=$file_name_witoutExt.time().".".$image_ext;               
                $destination_path='public/pat_images/'.$request->name.'';
                $path=$image->storeAs($destination_path, $new_image_name);   
                // dd($new_image_name);             
                $post=Orthop::find($id);
                $post->pat_image=$new_image_name;
                if($post->save()){
                    return redirect()->back()->with('success', 'Image uploaded');
                }else{
                    return redirect()->back()->with('success', 'Image not uploaded');
                }
               
                

          
    }
    public function update1(Request $request, $id)
    {
    //    return "Update!";
    // dd($request->images);
            $this->validate($request, [
                'images' =>'array',
                'images.*'=>'image|nullable|max:1999',

            ]);
            $images_array_to_db=[];
            if($request->hasFile('images')){
                $image_array=$request->file('images');
                $array_lenght=count($image_array);
                
                for($i=0; $i<$array_lenght; $i++){
                    $image_ext=$image_array[$i]->getClientOriginalExtension();
                    $image_full_name=$image_array[$i]->getClientOriginalName();
                    $file_name_witoutExt=pathinfo($image_full_name, PATHINFO_FILENAME);
                    
                    $new_image_name=$file_name_witoutExt.time().".".$image_ext;  
                    // dd($new_image_name);
                    // echo $new_image_name."<br>";

                    $destination_path='public/pat_images/'.$request->name.'';
                    $path=$image_array[$i]->storeAs($destination_path, $new_image_name);
                    array_push($images_array_to_db, $new_image_name);
                }

                
                $js=json_encode($images_array_to_db);
               
               $post=Orthop::find($id);
               $post->pat_image= $js ;
               $post->save();
               return redirect()->back()->with('msg', 'Image uploaded succesfully');
            }else{
                    return back()->with('msg', 'please select image');
                }
    
                //  }   
                //  $post->save()
                // $post->pat_image=$images_array_to_db;
                // if($post->save()){
                //     return redirect()->back()->with('msg', 'Image uploaded succesfully');
                // }else{
                //     return redirect()->back()->with('msg', 'Image not uploaded');
                // }

                
                

          
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
