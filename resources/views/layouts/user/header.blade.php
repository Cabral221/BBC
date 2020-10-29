<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top fadeInDown" data-wow-delay="0.5s">
    <div class="top-bar smoothie hidden-xs">
        <div class="container">
            <div class="clearfix">
                <ul class="list-inline social-links wow pull-left">
                    <li style="font-weight:500">
                        <a href="tel:+221338692500"><i class="fa fa-mobile"></i> {{ $info->phone ?? ' +221 33 869 25 00' }}</a>
                    </li>
                </ul>

                <div class="pull-right text-right">
                    <ul class="list-inline">
                        <li  style="font-weight:500">
                            <div><i class="fa fa-envelope-o"></i>{{ $info->address ?? '73 , Cité Keur Gorgui Sacré Coeur Pyrotechnie'}} - BP {{ $info->bp ??  ' 21784'}} Dakar – Senegal</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand smoothie logo logo-light" href="{{ route('user.welcome') }}"><img src="{{ asset('images/logo.png') }}" alt="logo"></a>
            <a class="navbar-brand smoothie logo logo-dark" href="{{ route('user.welcome') }}"><img src="{{ asset('images/logo.png') }}" alt="logo"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="{{ route('user.welcome') }}" class="{{ isset($current_page) && $current_page == 'home' ? 'active-page' : '' }}">Home</a>
                    
                </li>
                <li class="dropdown">
                <a href="{{ route('user.programs.index') }}" class="{{ isset($current_page) && $current_page == 'programs' ? 'active-page' : '' }}">Programs</a>
                    

                </li>
                <li class="dropdown">
                    <a href="{{ route('user.library') }}"  class="{{ isset($current_page) && $current_page == 'library' ? 'active-page' : '' }}">Library</a>
                </li>
                <li class="dropdown">
                    <a href="{{ route('user.contact') }}" class="{{ isset($current_page) && $current_page == 'contact' ? 'active-page' : '' }}">Contact</a>
                </li>
                @guest
                    <li class="dropdown">
                        <a href="{{ route('user.member') }}" class="{{ isset($current_page) && $current_page == 'member' ? 'active-page' : '' }}">Member</span></a>
                    </li>
                @else
                <li class="nav-item dropdown">
                    <a href="#" class="">{{ Auth::user()->firstname }} <span class="pe-7s-angle-down"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                @endguest
                <li class="dropdown">
                    <a href="{{ route('user.admission') }}" class="btn-admission btn-primary outline text-white">Admission</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>