{{-- @include('inc.navbar') --}}
@extends('layouts.app1')

@section('content')
<div class="jumbotron" style="padding-top:3px">
  <h3>Update Patient: <u>{{$post->name}}</u> </h3>
    
    <hr>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
    <div class='form-group'>
      {{Form::label('name', 'Patient Name')}}
      {{Form::text('name', $post->name)}}
      {{Form::label('phone', 'Phone')}}
      {{Form::text('phone', $post->phone)}}
      @if ($post->pgender =='male')
        {{Form::select('gender', ['male' => 'Male', 'female' => 'Female'], 'male')}} 
      @else
        {{Form::select('gender', ['male' => 'Male', 'female' => 'Female'], 'female')}} 
      @endif
      <div class="container">
        <div class="row">
          <div class="row">
            <div class="col col-md-3" style="text-align:center">
              Orthopedy
            </div>
            <div class="col col-md-3" style="text-align:center">
              Therapy
            </div>
            <div class="col col-md-3" style="text-align:center">
              Surgery
            </div>
          </div>
          <hr style="background: black; height:5px">
          <div class="row">
            <div class="col-md-1">
              {{Form::label('ceramics', 'Ceramics')}}
              <br>
              {{Form::label('toothBridge', 'ToothBridge')}}
              <br>
              {{Form::label('zirkon', 'Zirkon')}}
              <br>
              {{Form::label('dentalCrown', 'Vinir')}}
            </div>
            <div class="col-md-2">
              {{Form::text('ceramictooth', $post->ceramics, ['id'=>'ort1'])}}
                <br>
                {{Form::text('toothBr', $post->tbridge, [ 'id'=>'ort2'])}}
                <br>
                {{Form::text('zirkon', $post->zirkon, ['id'=>'ort3'])}}
                <br>
                {{Form::text('dcrown', $post->dcrown, [ 'id'=>'ort4'])}}
             </div>
            <div class="col-md-1">
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
            <div class="col-md-2">
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
            <div class="col-md-1">
              {{Form::label('remove', 'Remove')}}
              <br>
              {{Form::label('clean', 'Clean')}}
              <br>
              {{Form::label('inplant', 'Inplant')}}
              <br>
              {{Form::label('scale', 'Scale')}}
              <br><br>
            </div>
            <div  class="col-md-4">
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

          <div class="row" style="margin-top: 2vh">
            <div class="col col-md-1">
              {{Form::label('notes', 'Notes', ['class' => 'control-label'])}}
              {{-- {{Form::label('file', 'file', ['class' => 'control-label'])}} --}}
            </div>
            <div class="col col-md-2">
              {{Form::text('notes', $post->notes, ['placeholder'=>'Notes'], ['class' => 'form-control'])}}
              {{-- {{Form::file('image')}} --}}
               {{-- <input type="file" multiple="multiple"> --}}
            </div>
            <div class="col col-md-3 text-center " style="border: 3px groove white; padding:1%; margin-left:5%">
              <?php 
              $toDay=date("Y/m/d h:i");
              $now="2020-06-01T00:00";
              if(!$post->schedule_end){
                echo "<p id='toDay'>Now: ".$toDay."</p><label>Next Visit<input type='datetime-local' name='datetime' 
                    min='2020-06-01T00:00' max='2035-06-14T00:00' value='$now'></label>";
              }else{
                $array= (explode(" ",$post->schedule_end));
                $concat=$array[0]."T".$array[1];
                echo "<input type='datetime-local' name='datetime' title='next visit' 
                    min='2020-06-01T00:00' max='2035-06-14T00:00' value='$concat'>";
              }
              

            ?>
            </div>
          </div>
          <br>
        </div>
      </div>


    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Save to DB!', ['class'=>'btn btn-primary'])}}
    <a class="btn btn-primary" href='/dashboard'>Dashboard</a>
    {!! Form::close() !!}

  </div> 
</div>
    
    
@endsection

       