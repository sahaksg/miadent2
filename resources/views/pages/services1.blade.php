{{-- @include('inc.navbar') --}}
@extends('layouts.app1')

@section('content')
<div class="jumbotron" style="padding-top:3px ">
  <h3 style="margin-top:0">Add New Patients: </h3>
    
    <hr>
    {!! Form::open(['action' => 'PostsController@store1', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
    <div class='form-group'>
        {{Form::label('name', 'Patient Name')}}
        {{Form::text('name', '', ['placeholder'=>'Patient Name'])}}
        {{Form::label('phone', 'Phone')}}
        {{Form::text('phone', '', ['placeholder'=>'Phone'])}}
        {{Form::select('gender', ['male' => 'Male', 'female' => 'Female'], null, ['placeholder' => 'Gender'],['class'=>'form-control'])}} 
        
        <div class="container">

          <div class="row">
            <div >
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
                <br>
                {{-- {{Form::label('damaskTooth', 'Damask')}} --}}
                <br>
                
              </div>
              <div class="col-md-2">
                {{Form::text('ceramictooth', '', ['placeholder'=>'shtift', 'id'=>'ort1'])}}
                <br>
                {{Form::text('toothBr', '', ['placeholder'=>'bridge', 'id'=>'ort2'])}}
                <br>
                {{Form::text('zirkon', '', ['placeholder'=>'zirkon', 'id'=>'ort3'])}}
                <br>
                {{Form::text('crown', '', ['placeholder'=>'crown', 'id'=>'ort4'])}}
                <br> 
                {{-- {{Form::text('damask', '', ['placeholder'=>'damask', 'id'=>'ort5'])}} --}}
                <br>
                
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
                <br>
              </div>
              <div class="col-md-2">
                {{Form::text('fill', '', ['placeholder'=>'enter teeth to fill'])}}
                <br>
                {{Form::text('endos', '', ['placeholder'=>'enter teeth for endo'])}}
                <br>
                {{Form::text('comp', '', ['placeholder'=>'enter teeth for comp'])}}
                <br>
                {{Form::text('cosm', '', ['placeholder'=>'enter teeth for cosm'])}}
                <br>
                {{Form::text('retreat', '', ['placeholder'=>'enter teeth to retreat'])}}
                <br>
                {{Form::text('rcf', '', ['placeholder'=>'enter teeth to rcf'])}}
                <br>
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
              <div class="col-md-4">
                {{Form::text('remove', '', ['placeholder'=>'enter teeth to remove'])}}
                <br>
                {{Form::text('clean', '', ['placeholder'=>'enter teeth to clean'])}}
                <br>
                {{Form::text('inplant', '', ['placeholder'=>'enter teeth for inplant'])}}
                <br>
                {{Form::text('scale', '', ['placeholder'=>'enter teeth to scale'])}}
                <br>
              </div>
            </div> 
          <div class="row " style="margin-top: 2vh" >
            <div class="col col-md-1">
              {{Form::label('notes', 'Notes', ['class' => 'control-label'])}}
              {{Form::label('file', 'file', ['class' => 'control-label'])}}
            </div>
            <div class="col col-md-2">
              {{Form::text('notes', '', ['placeholder'=>'Notes'], ['class' => 'form-control'])}}
              {{Form::file('image')}}
              
             
            </div>
            <div class="col col-md-3 text-center" style="border: 3px groove white; padding:1%; margin-left:5%">
              {{-- <h5 >Next Appointment</h5> --}}
              
              {{-- <div class="col col-md-5">
                {{Form::label('schedule', 'Date:', ['class' => 'control-label'])}}
                {{ Form::text('schedule', '', ['id' =>'datepicker']) }}
              </div>
              <div class="col col-md-7 align-self-end">
                {{Form::label('timepicker', 'Time:', ['class' => 'control-label'])}}
                {{ Form::text('timepicker', ' ', ['id' =>'demo-input']) }}
              </div> --}}
          <input type="datetime-local" name="datetime" min="2018-06-07T00:00" max="2035-06-14T00:00" value="">

            </div>
            
            
          </div>
          
          <br>
          {{Form::submit('Save to DB!', ['class'=>'btn btn-primary'])}}
          <a class="btn btn-primary" href='/dashboard'>Dashboard</a>
          {!! Form::close() !!}
          </div>
        </div>
        </div>
      </div>
</div>
    
    
      
        

    
    {{-- @if(count($treatments) >0)
    <div class="container-fluid">
        
            @foreach($treatments as $treatment)
                <div class="col-md-4 " style="border:1px solid red; height: 10vh; line-height:10vh; text-align:center; ">
                  <a class="text-success" style='text-transform: uppercase; font-size: 5vh' href="/{{$treatment}}">{{$treatment}}</a>  
                </div>
            @endforeach
    </div>
   
    @endif --}}
@endsection

       