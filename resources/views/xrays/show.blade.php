{{-- @include('inc.navbar') --}}
@extends('layouts.app1')

@section('content')


<div class="jumbotron" style="padding-top: 1%">
    <div class="row">
        <h3>Edit/Add X-rays for <b>{{$posts->name}}</b></h3>
        <a class="btn btn-primary" href='/xrays'><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</a>
    </div>
   
    <div class="row" style="margin-top: 2%; text-align:center">
        {{-- <div class="col col-md-4">
            {!!Form::open(['action'=>['XraysController@update', $posts->id], 'method'=>'POST', 'enctype'=>'multipart/form-data'])!!}
            {{Form::hidden('id', $posts->id)}}
            {{Form::hidden('name', $posts->name)}}
            {{ Form::file('image') }}
            {{FORM::button('<i class="fa fa-database" aria-hidden="true"></i> Save to DB',['class'=>'btn btn-primary pull-right','type'=>'submit']) }}
            {!!Form::close()!!}
        </div> --}}
        <div class="col col-md-4 ">
            {!!Form::open(['action'=>['XraysController@update1', $posts->id], 'method'=>'POST', 'enctype'=>'multipart/form-data'])!!}
            {{Form::hidden('id', $posts->id)}}
            {{Form::hidden('name', $posts->name)}}
            {{ Form::file('images[]', array('multiple'=>true)) }}
            {{FORM::button('<i class="fa fa-database" aria-hidden="true"></i> Save to DB',['class'=>'btn btn-primary pull-left','type'=>'submit', 'style'=>'margin-top: 10px']) }}
            {!!Form::close()!!}

        </div>
    </div>
    
    @if(Session::has('msg'))
    {{Session::get('msg')}}

    @endif
  
    
</div>
<div class="jumbotron">
    <div class="row" >
        <?php
         $input=$posts->pat_image;
        if($input){
            $trimmed1=trim($input, '[]');
        // print_r($trimmed1);
        $exploded=explode(",", $trimmed1);
       foreach($exploded as $item){
            $trimmed1=trim($item, '"');
           echo "<div class='col col-md-2' ><img class='xray_img' src='/storage/pat_images/{$posts->name}/$trimmed1' style='width:100%' title='$trimmed1'></div>";
            }
        }else{
            echo "<h4>No X-rays available!</h4>";
        }
       
        
        
        // $trimmed1=trim($input, '[]');
        // $trimmed2=trim($trimmed1, '","');
        // $exploded=explode(",", $trimmed2);
        // echo gettype($trimmed1);
        
        // echo $input."<br>".$exploded[0]."<br>".$exploded[1];
        // 
        
       



        ?>
        
       
  
    </div>
</div>

    
    
  








@endsection
