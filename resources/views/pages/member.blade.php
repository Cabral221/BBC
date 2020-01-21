@extends('layouts.user.app')

@section('text-header')
<!-- Header -->
<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{asset('assets/img/bg/bg2.jpg')}}" data-speed="0.7">
    <div class="section-inner pad-top-200">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt30 wow text-center">
                    <h2 class="section-heading">Large Community</h2>
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
<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{ asset('images/bg-header2.jpg') }}" data-speed="0.7">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-6 col-md-6 pt-3 pb-3 mt-2">
                <h3>Log In </h3>
                <div class="form">
                    <form action="" method="post" class="form p-5">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Your Email *">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Your Password *">
                        <button type="submit" class="btn btn-primary btn-block p-3 mt-5">Log In</button>
                    </form>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 pt-3 pb-3 mt-2" style="background-color: rgb(255, 255, 255, 0.21)">
                <h3>Register </h3>
                <div class="form m-5">
                    <div class="info">
                        Don't have an account? Sign up
                    </div>
                    <form method="POST" action="{{ route('register') }}" class="form">
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
                                <input id="firstname" type="text" class="form-control text-white @error('firstname') is-invalid @enderror" name="name" value="{{ old('firstname') }}" required autocomplete="firstname">
                                
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
                                <button type="submit" class="btn btn-danger btn-block">
                                    S'inscrire
                                </button>
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

<div class="followers bg-primary">
    <div class="container">
        <div class="row mb-0">
            <div class="col-md-6 mb-0">
                <div class="text-center">
                    <h2>Subscriber on newsLetter</h2>
                    <p>Abonnez-vous pour recevoir les nouvelles de l'institut</p>
                </div>
            </div>
            <div class=" col-md-6 vertical-center text-center">
                <form action="#" class="form vertical-center">
                    <div class="vertical-center text-center input-group" style="width:100%">
                        <input type="text" class="form-control text-center" style="width: 70%;color:black" id="validationCustomUsername" placeholder="Your email" aria-describedby="inputGroupPrepend" required>
                        <div class="input-group-prepend border-0" style="display:inline-block;float:left">
                            <button type="submit" class="bg-danger border-0" style="margin-left: 3px;height:40px;width:40px"><span class="bg-danger border-0"><i class="fas fa-paper-plane" style="font-size:20px;color:white;"></i></span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection