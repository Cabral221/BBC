@extends('layouts.user.app')

@section('text-header')
<!-- Header -->
<header id="headerwrap" class="dark-wrapper backstretched special-max-height no-overlay">
    <div class="container vertical-center">
        <div class="intro-text vertical-center text-center smoothie">
            <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s">View all programs</div>
            <div class="intro-sub-heading wow fadeIn secondary-font" data-wow-delay="0.4s">The first UK university in <span class="rotate">Dakar, Senegal</span></div>
            <button type="submit" class="btn btn-primary"><h4>Admission</h4></button>
        </div>
    </div>
</header>
@endsection

@section('content')
    <div class="bg-primary">
        <div class="container">
            <div class="header">All Programs</div>
        </div>
    </div>
@endsection