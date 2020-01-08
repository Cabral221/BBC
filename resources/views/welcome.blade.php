@extends('layouts.user.app')

@section('text-header')
<div class="row h-100">
    <div class="container col-12 my-auto">
        <div class="intro-text vertical-center text-center smoothie">
            <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s"><h1>Welcome TO BBC</h1></div>
            <div class="intro-sub-heading wow fadeIn secondary-font" data-wow-delay="0.4s"><h3>The first UK university in Dakar</h3></div>
            <div>
                <button class="btn btn-primary border-bottom-danger">Admission</button>
            </div>
        </div>
    </div>
</div>
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
        <div class="row mb-0 h-100">
            <div class="col-md-6 col-md-6 mb-0">
                <div class="text-center">
                    <h2>Subscriber on newsLetters</h2>
                    <p>Abonnez-vous pour recevoir les nouvelles de l'institut</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 mb-0 my-auto">
                <form action="#" class="form">
                    <div class="input-group w-75">
                        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Your email" aria-describedby="inputGroupPrepend" required>
                        <div class="input-group-prepend border-0">
                            <button type="submit" class="bg-danger border-0" style="margin-left: 3px;"><span class="input-group-text bg-danger border-0" id="inputGroupPrepend"><i class="fas fa-paper-plane" style="font-size:20px;color:white;"></i></span></button>
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
