@extends('layouts.user.app', ['title' => 'Member'])

@section('text-header')
<!-- Header -->
<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{asset('assets/img/bg/bg2.jpg')}}" data-speed="0.7">
    <div class="section-inner pad-top-200">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt30 wow text-center">
                    <h1 class="section-heading">Large Community</h1>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<div style="height:80px;" class="text-dark text-center">
    <h2 class="vertical-center">Welcome abord </h2>   
</div>
<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{ asset('images/bg-study.jpg') }}" data-speed="0.7">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-6 col-md-6 pt-3 pb-3 mt-2">
                <h3>{{ __('Login') }}</h3>
                <div class="form">
                    <form action="{{ route('login') }}" id="form-login" method="POST" class="form p-5">
                        @csrf
                        <input type="email" class="form-control @error('email-login') is-invalid @enderror" name="email-login" value="{{ old('email-login') }}" placeholder="{{ __('E-Mail Address') }}">
                        @error('email-login')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <input type="password" name="password-login" id="password" class="form-control @error('password-login') is-invalid @enderror" placeholder="{{ __('Password') }}">
                        @error('password-login')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <a href="{{ route('login') }}" onclick="event.preventDefault();document.getElementById('form-login').submit();" class="btn btn-primary btn-block p-3 mt-5">{{ __('Login') }}</a>
                    </form>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 pt-3 pb-3 mt-2" style="background-color: rgb(255, 255, 255, 0.21)">
                <h3>Register </h3>
                <div class="form m-5">
                    <div class="info">
                        Don't have an account? Sign up
                    </div>
                    <form method="POST" action="{{ route('register') }}" id="form-register" class="form">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right text-right text-right">{{ __('Last Name') }}</label>
                            
                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control text-white @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname">
                                
                                @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right text-right text-right">{{ __('First Name') }}</label>
                            
                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control text-white @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname">
                                
                                @error('firstname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right text-right">{{ __('E-Mail Address') }}</label>
                            
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control text-white @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right text-right">{{ __('Password') }}</label>
                            
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control text-white @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right text-right">{{ __('Confirm Password') }}</label>
                            
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control text-white" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <a href="" onclick="event.preventDefault();document.getElementById('form-register').submit();" class="btn btn-danger btn-block">
                                    S'inscrire
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Carousel galery --}}
<section class="opaqued light-opaqued parallax">
    <div class="section-inner">
        <div class="container">
            <div class="row"><h3 class="text-dark text-center">BBC on images</h3></div>
            <div class="row">
                <div class="col-12">
                    @if (isset($galeries) && $galeries->count() > 0)
                        <ul class="owl-carousel-paged testimonial-owl wow fadeIn list-unstyled" data-items="4" data-items-desktop="[1200,4]" data-items-desktop-small="[980,4]" data-items-tablet="[768,3]" data-items-mobile="[479,2]">
                            @foreach ($galeries as $galery)
                                <li>
                                    <img src="{{ $galery->image }}" class="img-responsive" alt="">
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p class="text-center text-dark">Aucune image de la galerie pour le moment...</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
{{-- /end Carousel galery --}}

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