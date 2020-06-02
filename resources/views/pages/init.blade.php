{{-- @include('inc.navbar') --}}

@extends('layouts.app1')

@section('content')
<div class="jumbotron" style="padding-top:3px ">
<p style="margin-top:0">Patient Data for: <u>{{$patient->name}}</u></p>

  <div class="container" style="text-align:center; border: 1px solid red; height: 85vh; padding-top:0">
    {!! Form::open(['id'=>'form1','action' => 'PostsController@store2', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
    <div class="row">
      {{Form::text('pname', $patient->name)}}
      {{Form::hidden('p_id', $patient->id)}}
    </div>
    <div class="row">
    <div class="col col-md-7">
      
      <img src="{{ asset('img/chart.jpg') }}" alt="beran" usemap="#top"/>
        <map name="top">
        <area class='tooth' title="1" coords="108,227,14" shape="circle" style="background: aquamarine">
        <area class='tooth' title="2" coords="113,188,13" shape="circle">
        <area class='tooth' title="3" coords="115,151,15" shape="circle">
        <area class='tooth' title="4" coords="123,116,15" shape="circle">
        <area class='tooth' title="5" coords="131,89,12" shape="circle">
        <area class='tooth' title="6" coords="142,63,9" shape="circle">
        <area class='tooth' title="7" coords="163,45,11" shape="circle">
        <area class='tooth' title="8" coords="192,37,14" shape="circle">
        <area class='tooth' title="9" coords="227,37,14" shape="circle">
        <area class='tooth' title="10" coords="259,45,13" shape="circle">
        <area class='tooth' title="11" coords="279,63,13" shape="circle">
        <area class='tooth' title="12" coords="290,87,13" shape="circle">
        <area class='tooth' title="13" coords="295,115,15" shape="circle">
        <area class='tooth' title="14" coords="305,151,14" shape="circle">
        <area class='tooth' title="15" coords="310,186,16" shape="circle">
        <area class='tooth' title="16" coords="312,222,14" shape="circle">
        <area class='tooth' title="17" coords="308,297,15" shape="circle">
        <area class='tooth' title="18" coords="306,334,16" shape="circle">
        <area class='tooth' title="19" coords="297,373,16" shape="circle">
        <area class='tooth' title="20" coords="288,410,13" shape="circle">
        <area class='tooth' title="21" coords="282,437,15" shape="circle">
        <area class='tooth' title="22" coords="268,459,12" shape="circle">
        <area class='tooth' title="23" coords="244,470,13" shape="circle">
        <area class='tooth' title="24" coords="221,475,11" shape="circle">
        <area class='tooth' title="25" coords="197,475,11" shape="circle">
        <area class='tooth' title="26" coords="173,471,11" shape="circle">
        <area class='tooth' title="27" coords="153,457,13" shape="circle">
        <area class='tooth' title="28" coords="137,437,13" shape="circle">
        <area class='tooth' title="29" coords="130,408,13" shape="circle">
        <area class='tooth' title="30" coords="120,376,15" shape="circle">
        <area class='tooth' title="31" coords="112,336,15" shape="circle">
        <area class='tooth' title="32" coords="109,298,14" shape="circle">
      </map>
    </div>
    <div class="col col-md-5">
      
      
      {{-- {!! Form::open(['id'=>'form1','action' => 'PostsController@store2', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!} --}}
      <div class='col col-md-3' id='selected_tooth'>
        {{Form::text('ttt', '', ['id'=>'ttt'])}}
      </div>
      <div class='col col-md-2'>
        {{Form::label('endo', 'Endo')}}
        <br>
        {{Form::label('fill', 'Fill')}}
        <br>
        {{Form::label('crown', 'Crown')}}
        <br>
        {{Form::label('extr', 'Extraced')}}
      </div> 
      <div class='col col-md-3'>
        {{Form::checkbox('endo', 'endo')}}
        <br>
        {{Form::checkbox('fill', 'fill')}}
        <br>
        {{Form::checkbox('crown', 'crown')}}
        <br>
        {{Form::checkbox('extr', 'extr')}}
      </div>
      
          
     
    </div>
  </div>
    <div class="row">
     
      {{Form::submit('Save to DB!', ['class'=>'btn btn-primary'])}}
          
      {!! Form::close() !!}
    </div>
      
  </div>
  
  
    

@endsection

       