<div class="navcont">
    <div class="col col-md-5 sc" >
        <ul class="navMain">
            <li class="main active">
                <a class="navbar-brand sn" href="#">
                  <p id= 'atam' class="animated jello infinite">MiaDent</p>
                </a>
              </li>
        </ul>
    </div>
    
    <div class="col col-md-5 sc" >
        {{-- <ul class="navMain">
            <li class="main">
                <a href="/s">Add Patient</a>
            </li>
        </ul> --}}
    </div>
    <div class="col col-md-6 sc">
        <ul class="navMain">
            <li class="main">
            <a href="/skizbs"> Initial Status</a>
            </li>
        </ul>
    </div>
    <div class="col col-md-8 sc">
       
    </div>
    <div class="col col-md-8 sc" >
        <ul class="navMain">
            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
            @else
            <li class="main">{{ Auth::user()->name }} <span class="caret"></span>
                <ul class="dropdownUl">
                    <li class="dropdownLi"><a class="aaa logout" href="/dashboard">Dashboard</a></li>
                    <li class="dropdownLi logoutli">
                       
                            <a class='logout' href="{{ route('logout') }}"
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
    </div>
 
  </ul>

</div>