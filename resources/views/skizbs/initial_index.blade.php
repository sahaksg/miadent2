@extends('layouts.app1')

@section('content')
<div class="panel-body">
  @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
  
  @endif
</div>
<div class="jumbotron border border-info" style="width: 86%" >
  <p style="margin-top:0; text-align:center;">Initial Patients Registry:</p>
  <div class="row justify-content-sm-center align-items-center" >
    <div class="col col-md-3">
      <form class="form-inline" role='search' method='get' action="/searchinit/{{$userid}}" style="margin-top: 6px;">
        <div class="input-group" >
          <input type="text" class="form-control" placeholder="Search by Name" name='name' >
          <div class="input-group-btn">
            <button class="btn btn-secondary btn-md" type="submit"><i class="glyphicon glyphicon-search"></i></button>
          </div>
        </div>
       
      </form>
    </div>
    <div class="col col-md-1 pt-2">
      <a href='/skizbs/create' class="btn btn-success">Add Initial card</a>
    </div>
    
    
    
   
  </div>
 
  
  
</div>
@endsection
