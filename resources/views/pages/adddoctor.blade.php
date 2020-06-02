{{-- @include('inc.navbar') --}}
@extends('layouts.app1')

@section('content')
    <h1>Add doctor page</h1>
    <hr>
    {!! Form::open(['action' => 'DashboardController@update_doctor', 'method'=>'GET']) !!}
    <div class='form-group'>
        <div class="row">
            <div class="col col-md-2">
                {{Form::label('name', 'Doctor Name')}}
                <br>
                {{Form::label('email', 'Email')}}
                <br>
                {{Form::label('password', 'Password')}}
                <br>
                {{ Form::hidden('role', '0') }}
                {{ Form::hidden('is_admin', '0') }}
            </div>
            <div class="col col-md-2">
                {{Form::text('name', '', ['placeholder'=>'Doctor Name'])}}
                {{Form::text('email', '', ['placeholder'=>'email'])}}
                {{Form::text('password', '', ['placeholder'=>'password'])}}
            </div>
        </div>
        <br>     
        {{Form::submit('Save to DB!', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
       
   
@endsection


    
            
       
