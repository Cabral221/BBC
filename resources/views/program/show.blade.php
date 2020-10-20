@extends('layouts.user.app', ['title' => $filiere->libele])

<!-- Header -->
@section('text-header')
<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{asset('assets/img/bg/bg6.jpg')}}" data-speed="0.7">
    <div class="section-inner pad-top-200">
        <div class="container vertical-center">
            <div class="intro-text vertical-center text-center smoothie">
                <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s"><h2> {{$program->libele}}  Program</h2></div>
                <div><h1>{{ $filiere->libele }}</h1></div>
                <div class="intro-sub-heading wow fadeIn secondary-font" data-wow-delay="0.4s">The first UK university in <span class="rotate">Dakar, Senegal</span></div>
                <a href="{{ route('user.admission') }}" class="btn btn-primary mt-5"><h4>Admission</h4></a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row text-dark">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="bg-blue p-5">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <img 
                            src="{{ asset($filiere->icon) }}"
                            class="img-responsive img-circle" 
                            style="bg-white: max-width:100px" 
                            alt="logo filiere {{$filiere->libele}}">
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                            <h3>{{ $program->libele . ' : ' .$filiere->libele }}</h3>
                            <p>{!! $filiere->describe !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row text-dark">
            <div>
                <div class="pl-5 pr-5" style="border-left: none;">

                    <div><h3>Course Learning Details</h3></div>
                    <div>{!! $filiere->outCome !!}</div>
                    <hr>
                    
                    <div><h3>Course Duration</h3></div>
                    <div>{!! $filiere->duration !!}</div>
                    <hr>

                    <div><h3>Admission Requirements and mode of assessments</h3></div>
                    <div>{!! $filiere->requirement !!}</div>
                    <hr>
                    
                    <div><h3>Modules</h3></div>
                    <div>
                        <p>Modules that has been included</p>
                            @if ($filiere->modules != null)
                                <div class="row">
                                    @foreach ($filiere->modules as $module)
                                        <div class="col-sm-6 col-xs-12 col-md-4 my-1">
                                            <button class="btn-sm btn-outline-danger text-bold" disabled>{{ $module->libele }}</button>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <p>Aucun module pour ce filiere...</p>
                            @endif
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</section>
@if (isset($filiere->specialites) && $filiere->specialites->count() > 0)
    <div class="row bg-primary">
        <div class="container">
            <h2 class="text-center">Specialization</h2>
            @foreach ($filiere->specialites as $specialite)
            <diV class="card mb-4 text-center text-dark col-sm-2 col-xs-2 col-md-2 col-lg-2">
                <h4 class="card-body">{{ $specialite->libele }}</h4>
            </diV>
            @endforeach
        </div>
    </div>
@endif
@endsection