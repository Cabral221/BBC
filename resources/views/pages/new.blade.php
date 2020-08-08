@extends('layouts.user.app', ['title' => $new->title ])

@section('text-header')
<!-- Header -->
<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{asset('assets/img/bg/bg2.jpg')}}" data-speed="0.7">
    <div class="section-inner pad-top-200">
        <div class="container vertical-center">
            <div class="intro-text vertical-center text-center smoothie">
                <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s"><h1>News</h1></div>
                <div class="intro-sub-heading heading-font">
                    <h3>{{ $new->title }}</h3>
                </div>
                <div class="intro-sub-heading wow fadeIn secondary-font" data-wow-delay="0.4s">The first UK university in <span class="rotate">Dakar, Senegal</span></div>
                <a href="{{ route('user.admission') }}" class="btn btn-primary mt-5"><h4>Admission</h4></a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<div class="container text-dark p-3">
    <div class="row p-3 mt-5">
        <div class=" col-xs-12 col-sm-8 col-md-6 col-lg-6 col-sm-offset-2 col-md-offset-3 col-lg-offset-3">
            <div class="header">
                <h2>{{ $new->title }}</h2>
            </div>
            {!! $new->content !!}
        </div>
    </div>
</div>
@endsection