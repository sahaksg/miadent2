
@extends('layouts.app1')


{{-- @include('inc.navbaruser') --}}
@section('content')
<div class="container">
    <div class="row">
      @if($user->is_admin)
      @else
      <div class="col col-sm-2 newmenu">
        <ul>
          <li> <a class="nav-link" href="/skizbs"><i class="fa fa-user-plus" aria-hidden="true"></i> Initial Status</a></li>
          <li><a class="nav-link" href="/calendarall/{{$user->id}}"><i class="fa fa-calendar" aria-hidden="true"></i> Calendar</a></li>
          
        </ul>
      </div>
      @endif
        <div class="col col-md-8 ">
            <div class="panel panel-default">
                
                 <div class="panel-heading"> Welcome: <strong>{{$user->name}}</strong>
                   
                    <br>
                    @if($user->is_admin)
                    
                     
                     {{-- <form class="form-inline" role='search' method='get' action="/search" style="margin-top: 6px;"> --}}
                     <form class="form-inline" role='search' method='get' action="/searcheach/{{$user->id}}" style="margin-top: 6px;">
                        <div class="input-group" >
                          <input type="text" class="form-control" placeholder="Search by Name" name='name' >
                          <div class="input-group-btn">
                            <button class="btn btn-secondary btn-md" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                          </div>
                        </div>
                        <a class="btn btn-primary" href="/posts"><i class="fa fa-database" aria-hidden="true"></i></a>
                        <a class="btn btn-primary" href="/calendarall/{{$user->id}}">My <i class="fa fa-calendar" aria-hidden="true"></i></a>
                        <a class="btn btn-primary" href="/calendar">Total <i class="fa fa-calendar" aria-hidden="true"></i></a>
                        <a class="btn btn-primary" href="/xrays">X-RAY <i class="fa fa-video-camera" aria-hidden="true"></i></a>
                        {{-- <a class="btn btn-primary" href="/ajaxRequest">Appointment <i class="fa fa-book" aria-hidden="true"></i></a> --}}
                        {{-- <a class="btn btn-primary" href="/pages/adddoctor">Add Doctor</a> --}}
                      </form>
                      <form class="form-inline" role='search' method='get' action="/search" style="margin-top: 6px;">
                        <div class="input-group" >
                          <input type="text" class="form-control" placeholder="Search All" name='name' >
                          <div class="input-group-btn">
                            <button class="btn btn-secondary btn-md" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                          </div>
                        </div>
                      </form>
                    @else
                      <form class="form-inline" role='search' method='get' action="/searcheach/{{$user->id}}" style="margin-top: 6px;">
                        <div class="input-group" >
                          <input type="text" class="form-control" placeholder="Search by Name" name='name' >
                          <div class="input-group-btn">
                            <button class="btn btn-secondary btn-md" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                          </div>
                        </div>
                        {{-- <a class="btn btn-primary" href="/posts">DB</a> --}}
                        {{-- <a class="btn btn-primary" href="/calendaruser">Calendar</a> --}}
                    {{-- <a class="btn btn-primary" href="/calendarall/{{$user->id}}">My <i class="fa fa-calendar" aria-hidden="true"></i></a> --}}
                        {{-- <a class="btn btn-primary" href="/pages/adddoctor">Add Doctor</a> --}}
                      </form>

                    @endif
                </div>
                <div class="panel-body">
                  @if (session('status'))
                      <div class="alert alert-success">
                          {{ session('status') }}
                      </div>
                  @endif
                  @if(count($posts) ===0)
                  <h1>You have no Patients</h1>
                  @endif
                </div>
                    
               
                
            

                    
                    {{-- <a href="/posts" class="btn btn-primary">Browse Patients</a> --}}
                {{--    @if(count($posts) >0)
                    <table class="table table-striped">
                        <tr >
                            <th style="text-align:center">ID</th>
                            <th style="text-align:center">Name</th>
                            <th style="text-align:center">Gender</th>
                            <th style="text-align:center">Phone</th>
                            <th style="text-align:center">Notes</th>
                            <th style="text-align:center">Cteated At</th>
                            <th style="text-align:center">Updated At</th>
                           
                            @if($user->is_admin)
                                <th style="text-align:center">Delete</th>
                            @endif
                        </tr>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td><a href='/posts/{{$post->id}}'>{{$post->name}}</a></td>
                            <td>{{$post->pgender}}</td>
                            <td>{{$post->phone}}</td>
                            <td>{{$post->notes}}</td>
                            <td>{{$post->created_at}}</td>
                            <td>{{$post->updated_at}}</td>
                            
                            @if($user->is_admin)
                                <td>{!!Form::open(['action' =>['PostsController@destroy', $post->id], 'method'=>'POST' ])!!}
                                    {{Form::hidden('_method', 'Delete')}}
                                    {{Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>  Delete',['class'=>'btn btn-primary pull-right','type'=>'submit', 'onclick'=>'return confirm(\'are you sure?\')']) }}
                                    
                                    {!!Form::close()!!}
                                </td>
                            @else
                                {!!Form::close()!!}
                            @endif
                        </tr>
                        @endforeach
                    </table>
                   
                    @else

                    <h1>You have no Patients</h1>

                    @endif
                     
                </div> --}}
                
            </div>
              
        </div>
    </div>
</div>
@endsection
