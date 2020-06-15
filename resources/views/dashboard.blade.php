@extends('layouts.app1')


{{-- @include('inc.navbaruser') --}}
@section('content')
<div class="container">
    <div class="row">
      @if($user->is_admin)
      <div class="col col-sm-2 newmenu">
        <h4 style="text-align: center">Calendars</h4>
        <ul>
          <li class="decor"> <a class="nav-link" href="/calendaruser/8"> <i class="fa fa-calendar" aria-hidden="true"></i> Liza</a></li>
          <li class="decor"> <a class="nav-link" href="/calendaruser/9"> <i class="fa fa-calendar" aria-hidden="true"></i> Karo</a></li>
          <li class="decor"><a class="nav-link" href="/calendar"> <i class="fa fa-calendar" aria-hidden="true"></i> Total</a></li>
        </ul>
      </div>
      <div class="col col-sm-3 newmenu">
        <h4 style="text-align: center">Schedules</h4>
        <ul>
          
         
          <li class="decor"><a class="nav-link" href="/editschedule"> <i class="fa fa-clock-o" aria-hidden="true"></i> Patients with Cards</a></li>
          <li class="decor"><a class="nav-link" href="/editinitschedule"> <i class="fa fa-clock-o" aria-hidden="true"></i> New Patients </a></li>
          {{-- <li> <a class="nav-link" href="/posts"><i class="fa fa-database" aria-hidden="true"></i> DB</a></li> --}}
          {{-- <li><a class="nav-link" href="/xrays"> <i class="fa fa-video-camera" aria-hidden="true"></i> X-RAY</a></li> --}}
          
          
        </ul>
      </div>
      <div class="col col-sm-3 newmenu">
        <h4 style="text-align: center">Data Base</h4>
        <ul>
          <li class="decor"><a class="nav-link" href="/posts"> <i class="fa fa-database" aria-hidden="true"></i> DB</a></li>
        </ul>
        

      </div>
      @else
      <div class="col col-sm-2 newmenu">
        <ul>
          <li class="decor"> <a class="nav-link" href="/skizbs"><i class="fa fa-user-plus" aria-hidden="true"></i> Initial Status</a></li>
          <li class="decor"><a class="nav-link" href="/calendarall/{{$user->id}}"><i class="fa fa-calendar" aria-hidden="true"></i> Calendar</a></li>
          
        </ul>
      </div>
      @endif
        
      @if($user->is_admin)  
      @else
      <div class="col col-md-7 ">
          <div class="panel panel-default">
              <div class="panel-heading"> Welcome: <strong>{{$user->name}}</strong><br>
                    <div class="row">
                      <div class="col col-md-4">
                        <p>Search Patients</p>
                        <form class="form-inline" role='search' method='get' action="/searcheach/{{$user->id}}" style="margin-top: 6px;">
                          <div class="input-group" >
                            <input type="text" class="form-control" placeholder="Patient name..." name='name' >
                            <div class="input-group-btn">
                              <button class="btn btn-secondary btn-md" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                          </div>
                          
                         
                        </form>
                      </div>
                      <div class="col col-md-4">
                        <p>Patient History</p>
                        <form class="form-inline" role='search' method='get' action="/searchhistory/{{$user->id}}" style="margin-top: 6px;">
                          <div class="input-group" >
                            <input type="text" class="form-control" placeholder="Patient name..." name='name' >
                            <div class="input-group-btn">
                              <button class="btn btn-secondary btn-md" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                          </div>
                          
                          
                        </form>
                      </div>
                    </div>
                      
                      

                    @endif
                </div>
                <div class="panel-body">
                  @if (session('status'))
                      <div class="alert alert-success">
                          {{ session('status') }}
                      </div>
                  @endif
                  @if(count($posts) ===0 && $user->id !=10)
                  <h1>You have no Patients</h1>
                  
                  @endif
                </div>
                    
               
                
            

                    
                  
                
            </div>
              
        </div>
    </div>
</div>
@endsection