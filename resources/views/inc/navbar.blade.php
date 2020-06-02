<style>
  .nav>li>a{
    color:whitesmoke !important;
    font-size: 2vh;
  }
  .nav>li>a:hover{
    color:greenyellow !important;
  }
  .navbar-brand{
    color:whitesmoke !important;
  }
  .navbar-brand:hover{
    color:greenyellow !important;
  }
 
  button[type='submit']:focus{
    outline: none;
  }
  #logout{
    color: greenyellow !important;
  }
  #logout:hover{
    background: black !important;
    color: aliceblue !important;

  }
</style>
<nav class="navbar navbar-inverse ">
    <div class="container-fluid">
    {{-- <img src="img/login.png"> --}}
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><p id= 'atam' class="animated jello infinite">MiaDent</p> </a>
      </div>
      <div id="navbar" class="navbar-collapse collapse ">
        <ul class="nav navbar-nav">
          {{-- <li class="active"><a href="/">Home</a></li> --}}
          {{-- <li><a  href="/posts">DB</a></li>
          
          <li><a href="/s">Add Patient</a></li> --}}
        
          {{-- <li><a href="/search">Search Patient</a></li> --}}
          {{-- <li><a href="/posts/create" style="color:red">Create Patient</a></li> --}}

          
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <!-- Authentication Links -->
          @if (Auth::guest())
              <li><a href="{{ route('login') }}">Login</a></li>
              {{-- <li><a href="{{ route('register') }}">Register</a></li> --}}
          @else
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul style='background:black' class="dropdown-menu" role="menu">
                      <li id='logoutli'>
                          <a id='logout' href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
              </li>
          @endif
      </ul>
        
        
        
      </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
  </nav>