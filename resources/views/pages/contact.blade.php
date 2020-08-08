@extends('layouts.user.app', ['title' => 'Contact'])

@section('text-header')
<!-- Header -->
<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{asset('assets/img/bg/bg2.jpg')}}" data-speed="0.7">
    <div class="section-inner pad-top-200">
        <div class="container vertical-center">
            <div class="intro-text vertical-center text-center smoothie">
                <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s"><h1>Contact us !</h1></div>
                <div class="intro-sub-heading wow fadeIn secondary-font" data-wow-delay="0.4s">The first UK university in <span class="rotate">Dakar, Senegal</span></div>
                <a href="{{ route('user.admission') }}" class="btn btn-primary mt-5"><h4>Admission</h4></a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section id="welcome">
    <div class="section pt-5 pb-5">

        <div class="container">
            <div class="row">
                <div class="col-md-6 text-dark">
                    <p class="lead"><h2> Do you have any goals ? Contact us ! </h2></p>
                    <table class="table">
                        <tr>
                            <td>Address</td>
                            <td>{{ $info->address }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><a href="mailto:{{ $info->email }}">{{ $info->email }}</a></td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td><a href="tel:+{{ $info->phone }}">{{ $info->phone }}</a></td>
                        </tr>
                        <tr>
                            <td>Postal</td>
                            <td>{{ $info->bp }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <div id="message"></div>
                    <form method="POST" action="{{ route('user.message') }}" id="contact-form" class="main-contact-form wow">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-md-6 ">
                                <input type="text" style="border-color:black;" class="form-control col-lg-6 col-sm-6 col-md-6 text-dark @error('name') is-invalid @enderror" name="name" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name." required/>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6 ">
                                <input type="text" style="border-color:black;" class="form-control col-lg-6 col-sm-6 col-md-6 text-dark @error('email') is-invalid @enderror" name="email" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address." required/>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                        </div>
                        {{-- <input type="text" style="border-color:black;" class="form-control col-md-4 text-dark" name="website" placeholder="Your URL *" id="website" required data-validation-required-message="Please enter your web address." /> --}}
                        <textarea name="message" style="border-color:black;" style="border-color:black;" class="form-control text-dark @error('message') is-invalid @enderror" id="comments" placeholder="Your Message *" required data-validation-required-message="Please enter a message." required></textarea>
                            @error('message')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        <a class="btn btn-danger btn-block mt30 pull-left" href="#" onclick="event.preventDefault();document.getElementById('contact-form').submit();"> <h4> Send</h4></a>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
<div style="">
    <h2 class="text-center text-dark">Visit us !</h2>
    @map([
    'lat' => 14.706713569706585,
    'lng' => -17.472335847434977,
    'zoom' => 17,
    'markers' => [
        [
            'title' => 'BBC University',
            'lat' => 14.7062312,
            'lng' => -17.4727724,
            'url' => 'https://www.bbc-sn.com',
        ],
    ],
])
</div>
{{-- Followors --}}
<div class="followers bg-primary">
    <div class="container">
        <div class="row row-follow mb-0">
            <div class="col-md-6 mb-0">
                <div class="text-center">
                    <h2>Subscriber on newsLetter</h2>
                    <p>Subscribe to receive news from the institute</p>
                </div>
            </div>
            <div class=" col-md-6 text-center">
                <form action="{{ route('user.networks.store') }}" method="post" id="form-network" style="display:flex;">
                    @csrf
                    <div class="text-center input-group" style="width:100%;display:flex;">
                        <input type="text" name="email" class="form-control text-center @error('email') is-invalid @enderror" style="color:black" id="validationCustomUsername" placeholder="Your email" aria-describedby="inputGroupPrepend" required>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="input-group-prepend border-0" style="display:inline-block;float:left">
                            <a href="{{ route('user.networks.store') }}" onclick="event.preventDefault();document.getElementById('form-network').submit();" class="btn btn-danger bg-danger ml-1" style="height:40px;">
                                <span class="bg-danger border-0"><i class="fas fa-paper-plane" style="font-size:20px;color:white;"></i></span>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- end Followers --}}
@endsection
