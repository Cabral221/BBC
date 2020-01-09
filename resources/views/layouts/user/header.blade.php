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
                    <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Library <span class="pe-7s-angle-down"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="footer-1.html">Footer 1</a></li>
                        <li><a href="footer-2.html">Footer 2</a></li>
                        <li><a href="footer-3.html">Footer 3</a></li>
                        <li><a href="footer-4.html">Footer 4</a></li>
                        <li><a href="footer-5.html">Footer 5</a></li>
                        <li><a href="footer-6.html">Footer 6</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact <span class="pe-7s-angle-down"></span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages - About Us</a>
                            <ul class="dropdown-menu">
                                <li><a href="about-us-1.html">About Us - Layout 1</a></li>
                                <li><a href="about-us-2.html">About Us - Layout 2</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages - Services</a>
                            <ul class="dropdown-menu">
                                <li><a href="services-1.html">Services - Layout 1</a></li>
                                <li><a href="services-2.html">Services - Layout 2</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages - Contact</a>
                            <ul class="dropdown-menu">
                                <li><a href="contact-us-1.html">Contact - Layout 1</a></li>
                                <li><a href="contact-us-2.html">Contact - Layout 2</a></li>
                            </ul>
                        </li>
                        <li><a href="404.html">Pages - 404</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Member <span class="pe-7s-angle-down"></span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio - Full Grid</a>
                            <ul class="dropdown-menu">
                                <li><a href="portfolio-full-grid-4col.html">Full Grid - 4 Columns</a></li>
                                <li><a href="portfolio-full-grid-3col.html">Full Grid - 3 Columns</a></li>
                                <li><a href="portfolio-full-grid-2col.html">Full Grid - 2 Columns</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio - Boxed Grid</a>
                            <ul class="dropdown-menu">
                                <li><a href="portfolio-boxed-grid-4col.html">Boxed Grid - 4 Columns</a></li>
                                <li><a href="portfolio-boxed-grid-3col.html">Boxed Grid - 3 Columns</a></li>
                                <li><a href="portfolio-boxed-grid-2col.html">Boxed Grid - 2 Columns</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio - Full Masonry</a>
                            <ul class="dropdown-menu">
                                <li><a href="portfolio-full-masonry-4col.html">Full Masonry - 4 Columns</a></li>
                                <li><a href="portfolio-full-masonry-3col.html">Full Masonry - 3 Columns</a></li>
                                <li><a href="portfolio-full-masonry-2col.html">Full Masonry - 2 Columns</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio - Boxed Masonry</a>
                            <ul class="dropdown-menu">
                                <li><a href="portfolio-boxed-masonry-4col.html">Boxed Masonry - 4 Columns</a></li>
                                <li><a href="portfolio-boxed-masonry-3col.html">Boxed Masonry - 3 Columns</a></li>
                                <li><a href="portfolio-boxed-masonry-2col.html">Boxed Masonry - 2 Columns</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Single Portfolio</a>
                            <ul class="dropdown-menu">
                                <li><a href="single-portfolio-slider.html">Single Portfolio - Slider</a></li>
                                <li><a href="single-portfolio-carousel.html">Single Portfolio - Carousel</a></li>
                                <li><a href="single-portfolio-video.html">Single Portfolio - Video</a></li>
                                <li><a href="single-portfolio-fullscreen-slider.html">Single Portfolio - Fullscreen Slider</a></li>
                                <li><a href="single-portfolio-fullscreen-video.html">Single Portfolio - Fullscreen Video</a></li>
                                <li><a href="single-portfolio-image-list.html">Single Portfolio - Image List</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>