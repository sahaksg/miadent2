@extends('layouts.app1')

@section('content')
<div class="jumbotron" >
  <div class="row">
    <p style="margin-top:0">Initial Patients Regisrt:</p>
    <a href='init0' class="btn btn-primary">Add Initial card</a>
  </div>
  <div class="row">
    @if(count($skizbs)>0)
    <table border="1">
      <tr>
        <th>Name</th>
        <th>Phone</th>
      </tr>
      @foreach ($skizbs as $skizb)
        <tr>
          <td>{{$skizb->name}}</td>
          <td>{{$skizb->phone}}</td>
        </tr>

          
      @endforeach
    </table>
      
    @endif
  </div>
  
</div>
@endsection
