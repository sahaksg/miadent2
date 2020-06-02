{{-- @include('inc.navbar') --}}
@extends('layouts.app')

@section('content')
<h1>Create</h1>
<small>Create patient</small>

{!! Form::open(['action' => 'PostsController@store', 'method'=>'POST']) !!}
    <div class='form-group'>
        {{Form::label('name', 'Patient Name')}}
        {{Form::text('name', '', ['class'=>'form-control', 'placeholder'=>'Patient Name'])}}
        {{Form::label('phone', 'Patient Phone')}}
        {{Form::text('phone', '', ['class'=>'form-control', 'placeholder'=>'Phone'])}}
        {{Form::label('treatment', 'Treatment')}}
        {{Form::text('treatment', '', ['class'=>'form-control', 'placeholder'=>'Treatment'])}}
        {{Form::label('notes', 'Notes')}}
        {{Form::textarea('notes', '', ['id'=>'article-ckeditor', 'class'=>'form-control', 'placeholder'=>'Notes'])}}

        {{Form::select('gender', ['male' => 'Male', 'female' => 'Female'], null, ['placeholder' => 'Gender'],['class'=>'form-control'])}} 
        <br>
        {{Form::submit('Save to DB!', ['class'=>'btn btn-primary'])}}
    </div>
{!! Form::close() !!}

@endsection