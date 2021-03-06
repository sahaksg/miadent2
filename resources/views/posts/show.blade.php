{{-- @include('inc.navbar') --}}
@extends('layouts.app1')

@section('content')
<div class="jumbotron" style="padding-top:3px">
  <h3>Update Patient: <u>{{$post->name}}</u> </h3>
    
    <hr>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
    <div class='form-group'>
      <div class="row">
        <div class="col col-md-4">
          {{Form::label('name', 'Patient Name')}}
          {{Form::text('name', $post->name)}}
        </div>
        
        <div class="col col-md-3">
          {{Form::label('phone', 'Phone')}}
          {{Form::text('phone', $post->phone)}}
        </div>
        
        <div class="col col-md-1">
          @if ($post->pgender =='male')
          {{Form::select('gender', ['male' => 'Male', 'female' => 'Female'], 'male')}} 
        @else
          {{Form::select('gender', ['male' => 'Male', 'female' => 'Female'], 'female')}} 
        @endif
        </div>
      </div>
      <div class="row">
        <div class="col col-md-3 ml-5" style="text-align:center">
          Orthopedy
        </div>
        <div class="col col-md-4 ml-4" style="text-align:center">
          Therapy
        </div>
        <div class="col col-md-4" style="text-align:center">
          Surgery
        </div>
      </div>
      <div class="row">
        <div class="col col-md-1">
          {{Form::label('ceramics', 'Ceramics')}}
          <br>
          {{Form::label('toothBridge', 'ToothBridge')}}
          <br>
          {{Form::label('zirkon', 'Zirkon')}}
          <br>
          {{Form::label('dentalCrown', 'Vinir')}}
        </div>
        <div class="col col-md-3">
          {{Form::text('ceramictooth', $post->ceramics, ['id'=>'ort1'])}}
            <br>
            {{Form::text('toothBr', $post->tbridge, [ 'id'=>'ort2'])}}
            <br>
            {{Form::text('zirkon', $post->zirkon, ['id'=>'ort3'])}}
            <br>
            {{Form::text('dcrown', $post->dcrown, [ 'id'=>'ort4'])}}
         </div>
         <div class="col col-md-1">
          {{Form::label('fill', 'Fill')}}
          <br>
          {{Form::label('endos', 'Endo')}}
          <br>
          {{Form::label('comp', 'Composite')}}
          <br>
          {{Form::label('cosm', 'Cosmetic')}}
          <br> 
          {{Form::label('retreat', 'Retreat')}}
          <br>
          {{Form::label('rcf', 'RCF')}}
        </div>
        <div class="col col-md-3">
          {{Form::text('fill', $post->fill )}}
          <br>
          {{Form::text('endos', $post->endos)}}
          <br>
          {{Form::text('comp', $post->comp)}}
          <br>
          {{Form::text('cosm', $post->cosm)}}
          <br>
          {{Form::text('retreat', $post->retreat)}}
          <br>
          {{Form::text('rcf', $post->rcf)}}
        </div>
        <div class="col col-md-1">
          {{Form::label('remove', 'Remove')}}
          <br>
          {{Form::label('clean', 'Clean')}}
          <br>
          {{Form::label('inplant', 'Inplant')}}
          <br>
          {{Form::label('scale', 'Scale')}}
          <br><br>
        </div>
        <div  class="col col-md-3">
          {{Form::text('remove', $post->remove)}}
          <br>
          {{Form::text('clean', $post->clean)}}
          <br>
          {{Form::text('inplant', $post->inplant)}}
          <br>
          {{Form::text('scale', $post->scale)}}
          <br>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col col-md-1">
          {{Form::label('notes', 'Notes', ['class' => 'control-label'])}}
        </div>
        <div class="col col-md-2">
          {{Form::text('notes', $post->notes, ['placeholder'=>'Notes'], ['class' => 'form-control'])}}
        </div>
        <div class="col col-md-4 text-center " style="border: 3px groove white; padding:1%; margin-left:5%">
          <?php 
          $toDay=date("Y/m/d h:i");
          $now="2020-06-01T00:00";

          $now_date=date("Y-m-d");
          $now_time=date("h:i:s");
          $now_full=$now_date."T".$now_time;

          if(!$post->schedule_end){
            echo "<label>Next Visit: <input type='datetime-local' name='datetime' 
               max='2035-06-14T00:00' value='$now_full'></label>";
          }else{
            $array= (explode(" ",$post->schedule_end));
            $concat=$array[0]."T".$array[1];
            echo "<p id='toDay'>Now: ".$toDay."</p><label><input type='datetime-local' name='datetime' title='next visit' 
                min='2020-06-01T00:00' max='2035-06-14T00:00' value='$concat'></label>";
          }
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col col-md-3">
          {{Form::hidden('_method','PUT')}}
          {{Form::submit('Save to DB!', ['class'=>'btn btn-success'])}} 
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div> 

    
    
@endsection

       