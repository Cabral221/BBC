@extends('layouts.user.app')

@section('text-header')
<!-- Header -->
<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{asset('assets/img/bg/bg2.jpg')}}" data-speed="0.7">
    <div class="section-inner pad-top-200">
        <div class="container vertical-center">
            <div class="intro-text vertical-center text-center smoothie">
                <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s"><h2>BBC Blog</h2></div>
                <div class="intro-sub-heading wow fadeIn secondary-font" data-wow-delay="0.4s">The first UK university in <span class="rotate">Dakar, Senegal</span></div>
                <a href="{{ route('user.admission') }}" class="btn btn-primary mt-5"><h4>Admission</h4></a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')

<div class="row">
    <div class="container">
        <h3>View all articles</h3>
        <div class="row text-dark">
            <div class="col-sm-4 col-md-4 p-3 mt-3 mb-3">
                <div class="activity">
                    <div class="card">
                        <div class="card-title">
                            <img src="{{ asset('images/img-test.jpg') }}" alt="" srcset="" class="img-responsive">
                        </div>
                        <div class="card-title text-left mt-3 mb-3 pl-3 pr-3">
                            <a href="#">
                                <h5 style="display:inline" class="text-left">BBC Graduation 2019</h5>
                                <p style="float:right;display:inline">March, 12</p>
                            </a>
                        </div>
                        <div class="card-body">
                            <p class="text-left">Quis nulla cillum esse fugiat anim aliquip laborum. Labore qui laborum nostrud est adipisicing amet dolor do excepteur. Tempor qui consequat ea qui laborum reprehenderit. Elit excepteur magna commodo est ullamco ad laboris ex in tempor tempor et id ex.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 p-3 mt-3 mb-3">
                <div class="activity">
                    <div class="card">
                        <div class="card-title">
                            <img src="{{ asset('images/img-test.jpg') }}" alt="" srcset="" class="img-responsive">
                        </div>
                        <div class="card-title text-left mt-3 mb-3 pl-3 pr-3">
                            <a href="{{ route('user.posts.show',1) }}">
                                <h5 style="display:inline" class="text-left">BBC Graduation 2019</h5>
                                <p style="float:right;display:inline">March, 12</p>
                            </a>
                        </div>
                        <div class="card-body">
                            <p class="text-left">Quis nulla cillum esse fugiat anim aliquip laborum. Labore qui laborum nostrud est adipisicing amet dolor do excepteur. Tempor qui consequat ea qui laborum reprehenderit. Elit excepteur magna commodo est ullamco ad laboris ex in tempor tempor et id ex.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 p-3 mt-3 mb-3">
                <div class="activity">
                    <div class="card">
                        <div class="card-title">
                            <img src="{{ asset('images/img-test.jpg') }}" alt="" srcset="" class="img-responsive">
                        </div>
                        <div class="card-title text-left mt-3 mb-3 pl-3 pr-3">
                            <a href="#">
                                <h5 style="display:inline" class="text-left">BBC Graduation 2019</h5>
                                <p style="float:right;display:inline">March, 12</p>
                            </a>
                        </div>
                        <div class="card-body">
                            <p class="text-left">Quis nulla cillum esse fugiat anim aliquip laborum. Labore qui laborum nostrud est adipisicing amet dolor do excepteur. Tempor qui consequat ea qui laborum reprehenderit. Elit excepteur magna commodo est ullamco ad laboris ex in tempor tempor et id ex.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 p-3 mt-3 mb-3">
                <div class="activity">
                    <div class="card">
                        <div class="card-title">
                            <img src="{{ asset('images/img-test.jpg') }}" alt="" srcset="" class="img-responsive">
                        </div>
                        <div class="card-title text-left mt-3 mb-3 pl-3 pr-3">
                            <a href="#">
                                <h5 style="display:inline" class="text-left">BBC Graduation 2019</h5>
                                <p style="float:right;display:inline">March, 12</p>
                            </a>
                        </div>
                        <div class="card-body">
                            <p class="text-left">Quis nulla cillum esse fugiat anim aliquip laborum. Labore qui laborum nostrud est adipisicing amet dolor do excepteur. Tempor qui consequat ea qui laborum reprehenderit. Elit excepteur magna commodo est ullamco ad laboris ex in tempor tempor et id ex.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 p-3 mt-3 mb-3">
                <div class="activity">
                    <div class="card">
                        <div class="card-title">
                            <img src="{{ asset('images/img-test.jpg') }}" alt="" srcset="" class="img-responsive">
                        </div>
                        <div class="card-title text-left mt-3 mb-3 pl-3 pr-3">
                            <a href="#">
                                <h5 style="display:inline" class="text-left">BBC Graduation 2019</h5>
                                <p style="float:right;display:inline">March, 12</p>
                            </a>
                        </div>
                        <div class="card-body">
                            <p class="text-left">Quis nulla cillum esse fugiat anim aliquip laborum. Labore qui laborum nostrud est adipisicing amet dolor do excepteur. Tempor qui consequat ea qui laborum reprehenderit. Elit excepteur magna commodo est ullamco ad laboris ex in tempor tempor et id ex.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 p-3 mt-3 mb-3">
                <div class="activity">
                    <div class="card">
                        <div class="card-title">
                            <img src="{{ asset('images/img-test.jpg') }}" alt="" srcset="" class="img-responsive">
                        </div>
                        <div class="card-title text-left mt-3 mb-3 pl-3 pr-3">
                            <a href="#">
                                <h5 style="display:inline" class="text-left">BBC Graduation 2019</h5>
                                <p style="float:right;display:inline">March, 12</p>
                            </a>
                        </div>
                        <div class="card-body">
                            <p class="text-left">Quis nulla cillum esse fugiat anim aliquip laborum. Labore qui laborum nostrud est adipisicing amet dolor do excepteur. Tempor qui consequat ea qui laborum reprehenderit. Elit excepteur magna commodo est ullamco ad laboris ex in tempor tempor et id ex.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- Carousel galery --}}
<section class="opaqued dark-opaqued parallax">
    <div class="section-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <ul class="owl-carousel-paged testimonial-owl wow fadeIn list-unstyled" data-items="4" data-items-desktop="[1200,4]" data-items-desktop-small="[980,4]" data-items-tablet="[768,3]" data-items-mobile="[479,2]">
                        <li>
                            <img src="images/img-test.jpg" class="img-responsive" alt="">
                        </li>
                        <li>
                            <img src="images/image1.png" class="img-responsive" alt="">
                        </li>
                        <li>
                            <img src="images/image2.png" class="img-responsive" alt="">
                        </li>
                        <li>
                            <img src="images/image3.png" class="img-responsive" alt="">
                        </li>
                        <li>
                            <img src="images/image5.png" class="img-responsive" alt="">
                        </li>
                        <li>
                            <img src="assets/img/logo/logo6.png" class="img-responsive" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- /end Carousel galery --}}
@endsection

