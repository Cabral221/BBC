<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top fadeInDown" data-wow-delay="0.5s">
    <div class="top-bar smoothie hidden-xs">
        <div class="container">
            <div class="clearfix">
                <ul class="list-inline social-links wow pull-left">
                    <li style="font-weight:500">
                        <a href="#"><i class="fa fa-mobile"></i> +221 33 869 25 00</a>
                    </li>
                </ul>

                <div class="pull-right text-right">
                    <ul class="list-inline">
                        <li  style="font-weight:500">
                            <div><i class="fa fa-envelope-o"></i>73 , Cité Keur Gorgui Sacré Coeur Pyrotechnie – Bp 21784 Dakar – Senegal</div>
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
                    <a href="{{ route('user.welcome') }}" class="active">Home</a>
                    
                </li>
                <li class="dropdown">
                    <a href="{{ route('user.programs') }}">Programs <span class="pe-7s-angle-down"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="header-2.html">Canadian</a></li>
                        <li><a href="header-2.html">English</a></li>
                        <li><a href="header-1.html">French</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="{{ route('user.library') }}">Library</a>
                </li>
                <li class="dropdown">
                    <a href="{{ route('user.contact') }}">Contact</a>
                </li>
                <li class="dropdown">
                    <a href="{{ route('user.member') }}" class="dropdown-toggle">Member <span class="pe-7s-angle-down"></span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a href="#">Log in</a>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#">Register</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>