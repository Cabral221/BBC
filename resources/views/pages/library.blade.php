@extends('layouts.user.app')

@section('css')
<link rel="stylesheet" type="text/css" href="css/galerie.css">
<link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
<script src="{{ asset('js/lightbox-plus-jquery.min.js') }}"></script>
@endsection

@section('text-header')
<!-- Header -->
<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{asset('assets/img/bg/bg2.jpg')}}" data-speed="0.7">
    <div class="section-inner pad-top-200">
        <div class="container vertical-center">
            <div class="intro-text vertical-center text-center smoothie">
                <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s"><h2>BBC library</h2></div>
                <div class="intro-sub-heading wow fadeIn secondary-font" data-wow-delay="0.4s">The first UK university in <span class="rotate">Dakar, Senegal</span></div>
                <a href="{{ route('user.admission') }}" class="btn btn-primary mt-5"><h4>Admission</h4></a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<div class="container text-dark p-3">
    <div class="header text-center"><h3>Book recommended</h3></div>
    <div class="row p-3 mt-5">
        @if (isset($books) && $books->count() > 0)
            @foreach ($books as $book)
                <div class="col-sm-6 col-md-4 col-lg-3 pt-2">

                    <div class="media">
                        <div class="pull-left">
                            <img class="" width="100px" src="{{ $book->image }}" alt="">
                        </div>
                        <div class="media-body text-dark">
                            <span class="media-heading">{{ $book->title }} by <strong>{{ $book->auteur }}</strong></span>
                            <small class="muted">{{ $book->dateOut }}</small>
                        </div>
                    </div>

                </div>                
            @endforeach
        @else
            <p>Aucun livre recommander pour le moment...</p>
        @endif
    </div>
    <div class="header text-center p-3"><h3>BBC on images</h3></div>
    <div class="row" p-3 mt-5>
        <div class="gallery">
            <div class="card-columns">
                @if (isset($galeries) && $galeries->count() > 0)
                    @foreach ($galeries as $galery)
                        <div class="card">
                            <a href="{{ $galery->image }}" data-lightbox="mygallery" data-title="{{ $galery->libele }}"><img class="card-img-top img-responsive" src="{{ $galery->image }}"></a>
                            <div class="card-body">
                                <h5 class="card-title">{{ $galery->libele }}</h5>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="text-center">Aucune images pour le moment...</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection