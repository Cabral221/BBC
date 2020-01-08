<div class="container info mb-3">
    <div class="row">
        <div class="col-md-6 text-left">
            <p style="font-size:10px;font-weight: bold;" class="mt-2">33 000 00 00</p>
        </div>
        <div class="col-md-6 text-right">
            <p style="font-size:10px;font-weight: bold;" class="mt-2">73 , Cité Keur Gorgui Sacré Coeur Pyrotechnie – Bp 21784 Dakar – Senegal</p>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-sm fixed-top navbar-light shadow-sm pb-0" style="z-index: 1000;">
    <div class="container mt-3">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" style="width: 79px;" alt="BBC University" srcset="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                
            </ul>
            
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{ route('user.welcome') }}" class="navbar-link btn active">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.programs') }}" class="navbar-link btn">Programs</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.library') }}" class="navbar-link btn">Library</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.contact') }}" class="navbar-link btn">Contact</a>
                </li>
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="navbar-link btn" href="{{ route('user.member') }}">{{ __('Member') }}</a>
                </li>
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="navbar-link btn dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
    </div>
</nav>