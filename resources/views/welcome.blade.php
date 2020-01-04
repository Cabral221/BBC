@extends('layouts.user.app')

@section('text-header')
<header id="headerwrap" class="backstretched special-max-height mt-5">
    <div class="container vertical-center">
        <div class="intro-text vertical-center text-center smoothie">
            <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s"><h1>Welcome TO BBC</h1></div>
            <div class="intro-sub-heading wow fadeIn secondary-font" data-wow-delay="0.4s"><h3>The first UK university in Dakar</h3></div>
            <div>
                <button class="btn btn-primary">Admission</button>
            </div>
        </div>
    </div>
</header>
@endsection

@section('content')
<div class="container">
    <div class="word-of mt-2 text-center">
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
        <div class="row pt-3">
            <div class="col-md-4 col-sm-4">
                <div class="program">
                    <div class="image">
                        <img src="#" alt="" srcset="">
                    </div>
                    <div class="text header">
                        <h3>Business</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="program">
                    <div class="image">
                        <img src="#" alt="" srcset="">
                    </div>
                    <div class="text header">
                        <h3>Business</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="program">
                    <div class="image">
                        <img src="#" alt="" srcset="">
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
        <div class="row mb-0">
            <div class="col-md-6 col-md-6 mb-0">
                <div class="text-center">
                    <h2>Subscriber on newsLetters</h2>
                    <p>Abonnez-vous pour recevoir les nouvelles de l'institut</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 mb-0">
                <form action="#" class="form">
                    <div class="input-group">
                        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Your email" aria-describedby="inputGroupPrepend" required>
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-send"></i></span>
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
