@extends('layouts.user.app', ['title' => 'Library'])

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
                <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s"><h1>BBC library</h1></div>
                <div class="intro-sub-heading wow fadeIn secondary-font" data-wow-delay="0.4s">The first UK university in <span class="rotate">Dakar, Senegal</span></div>
                <a href="{{ route('user.admission') }}" class="btn btn-primary mt-5"><h4>Admission</h4></a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<div class="container text-dark p-3">
    <div class="header text-center"><h2>Book recommended</h2></div>
    <div class="row p-3 mt-5">
        @if (isset($books) && $books->count() > 0)
            @foreach ($books as $book)
                <div class="col-sm-6 col-md-6 col-lg-6 pt-2">

                    <div class="media">
                        <div class="pull-left">
                            <img class="" width="100px" src="{{ $book->image }}" alt="pochette du livre">
                        </div>
                        <div class="media-body text-dark">
                            <div>
                                <span class="media-heading"> <h5>{{ $book->title }}</h5></span>
                            </div>
                            <div>
                                <small class="muted">by</small> : <strong>{{ $book->auteur }}</strong>
                            </div>
                            <small class="muted"> P. {{ Date('Y',strtotime($book->dateOut)) }}</small>
                        </div>
                    </div>

                </div>                
            @endforeach
        @else
            <p>Aucun livre recommander pour le moment...</p>
        @endif
    </div>
    <div class="header text-center p-3"><h2>BBC on images</h2></div>
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
            <div class="text-center">
                {{ $galeries->links() }}
            </div>
        </div>
    </div>
</div>
@endsection