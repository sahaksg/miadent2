@extends('layouts.app1')

@section('content')
<div class="jumbotron" >
  <h3 style="margin-top:0; text-align:center;">Welcome to X-Ray System</h3>
  <p style="margin-top:0; text-align:center;">Doctor: {{$user->name}}</p>
  <div class="row" style="text-align:center">
   <form class="form-inline" role='search' method='get' action="/searchxray" style="margin-top: 6px;">
      <div class="input-group" >
        <input type="text" class="form-control" placeholder="Search by Name" name='name' >
        <div class="input-group-btn">
          <button class="btn btn-secondary btn-md" type="submit"><i class="glyphicon glyphicon-search"></i></button>
        </div>
      </div>
    </form>
  </div>
  
</div>
@endsection

