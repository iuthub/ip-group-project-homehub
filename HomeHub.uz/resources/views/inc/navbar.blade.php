<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand font-weight-bold" href="{{ url('/') }}">HomeHub</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/about') }}">about</a>
        </li>
      </ul>

     <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a class="btn btn-sm btn-outline-secondary" href="{{ route('login') }}">Login</a></li>
                    <li><a class="btn btn-sm btn-outline-secondary" href="{{ route('register') }}">Register</a></li>
                @else
                    <li><a class="btn btn-lg btn-info" href="/dashboard">{{ Auth::user()->name . ':'}}</a></li>
                    <li><a class="btn btn-sm btn-outline-secondary" href="/dashboard">Dashboard</a></li>  
                    <li><a class="btn btn-sm btn-outline-secondary" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>        
                        
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            
                     
                @endif
            </ul>
            
    </div>
  </nav>
 
 
</div>