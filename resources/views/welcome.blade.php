@extends('layouts.user.app')

@section('text-header')
<!-- Header -->
<header id="headerwrap" class="dark-wrapper backstretched special-max-height no-overlay">
    <div class="container vertical-center">
        <div class="intro-text vertical-center text-center smoothie">
            <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s">WELCOME TO BBC</div>
            <div class="intro-sub-heading wow fadeIn secondary-font" data-wow-delay="0.4s">The first UK university in <span class="rotate">Dakar, Senegal</span></div>
            <button type="submit" class="btn btn-primary"><h4>Admission</h4></button>
        </div>
    </div>
</header>
@endsection

@section('content')
<div class="container">
    <div class="word-of mt-2 text-center text-dark">
        <div class="">
            <h2>Dr Séne, BBC Director</h2>
        </div>
        <div class="row">
            <div class="col-md-3">
                <img src="#" style="height:200px" alt="" srcset="">
            </div>
            <div class="col-md-9">
                <p>Lorem Ipsum Dolores, Lorem Ipsum Dolores, Lorem Ipsum Dolores, Lorem Ipsum Dolores.
                    Lorem Ipsum Dolores, Lorem Ipsum Dolores, Lorem Ipsum Dolores, Lorem Ipsum Dolores.
                    Lorem Ipsum Dolores, Lorem Ipsum Dolores, Lorem Ipsum Dolores, Lorem Ipsum Dolores.
                    Lorem Ipsum Dolores, Lorem Ipsum Dolores, Lorem Ipsum Dolores, Lorem Ipsum Dolores.
                    Lorem Ipsum Dolores, Lorem Ipsum Dolores, Lorem Ipsum Dolores, Lorem Ipsum Dolores.
                    Lorem Ipsum Dolores, Lorem Ipsum Dolores, Lorem Ipsum Dolores, Lorem Ipsum Dolores.
                    Lorem Ipsum Dolores, Lorem Ipsum Dolores, Lorem Ipsum Dolores, Lorem Ipsum Dolores.
                    Lorem Ipsum Dolores, Lorem Ipsum Dolores, Lorem Ipsum Dolores, Lorem Ipsum Dolores.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="programs text-center mt-3 pt-3 pb-5">
    <div class="container">
        <h2>programs</h2>
        <div class="row pt-3 text-center">
            <div class="col-md-4 col-sm-4">
                <div class="program">
                    <div class="image">
                        <img src="{{ asset('images/logo.png') }}" alt="" srcset="">
                    </div>
                    <div class="text header">
                        <h3>Business</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="program">
                    <div class="image">
                        <img src="{{ asset('images/logo.png') }}" alt="" srcset="">
                    </div>
                    <div class="text header">
                        <h3>Business</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="program">
                    <div class="image">
                        <img src="{{ asset('images/logo.png') }}" alt="" srcset="">
                    </div>
                    <div class="text header">
                        <h3>Business</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="program">
                    <div class="image">
                        <img src="{{ asset('images/logo.png') }}" alt="" srcset="">
                    </div>
                    <div class="text header">
                        <h3>Business</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="program">
                    <div class="image">
                        <img src="{{ asset('images/logo.png') }}" alt="" srcset="">
                    </div>
                    <div class="text header">
                        <h3>Business</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="program">
                    <div class="image bg-primary" style="border-radius:50% 50%;">
                        <img src="{{ asset('images/logo.png') }}" class="img-circle" alt="" srcset="">
                    </div>
                    <div class="text header">
                        <h3>Business</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="followers bg-primary">
    <div class="container">
        <div class="row mb-0 vertical-center h-100">
            <div class="col-md-6 col-md-6 mb-0 vertical-center">
                <div class="text-center">
                    <h2>Subscriber on newsLetters</h2>
                    <p>Abonnez-vous pour recevoir les nouvelles de l'institut</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 mb-0 my-auto vertical-center">
                <form action="#" class="form">
                    <div class="input-group w-75 vertical-center">
                        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Your email" aria-describedby="inputGroupPrepend" required>
                        <div class="input-group-prepend border-0">
                            <button type="submit" class="bg-danger border-0" style="margin-left: 3px;"><span class="bg-danger border-0"><i class="fas fa-paper-plane" style="font-size:20px;color:white;"></i></span></button>
                        </div>
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
