@extends('layouts.user.app')

@section('text-header')
<!-- Header -->
<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{asset('assets/img/bg/bg6.jpg')}}" data-speed="0.7">
    <div class="section-inner pad-top-200">
        <div class="container vertical-center">
            <div class="intro-text vertical-center text-center smoothie">
                <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s"><h2> {{$filiere->program->libele}}  Program</h2></div>
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
            <div class="col-sm-8">
                <div class="bg-blue p-5">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
                            <img src="{{ asset($filiere->icon) }}" class="img-responsive img-circle" style="bg-white" alt="" srcset="">
                        </div>
                        <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9">
                            <h3>{{ $filiere->program->libele . ' : ' .$filiere->libele }}</h3>
                            <ul>
                                <li>{!! $filiere->describe !!}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                {{-- <div class="text-center">
                    <img src="{{ asset('images/image1.png') }}" alt="" srcset="">
                    <div class="text">
                        <h2>Mr Doe John</h2>
                        <h5>Director des programs</h5>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row text-dark">
            <div>
                <div class="pl-5 pr-5" style="border-left: none;">
                    
                    <div><h3>Course Duration</h3></div>
                    <div>{!! $filiere->duration !!}</div>
                    <hr>
                    
                    <div><h3>Modules</h3></div>
                    <div>
                        <p>Modules that has been included</p>
                            @if ($filiere->modules != null)
                                <div class="row">
                                    @foreach ($filiere->modules as $module)
                                        <div class="col-sm-6 col-xs-12 col-md-4 my-1">
                                            - <button class="btn-sm btn-outline-danger text-bold" disabled>{{ $module->libele }}</button>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <p>Aucun module pour ce filiere...</p>
                            @endif
                    </div>
                    <hr>
                    
                    <div><h3>Admission Requirements and mode of assessments</h3></div>
                    <div>{!! $filiere->requirement !!}</div>
                    <hr>

                    <div><h3>Course Learning Outcome</h3></div>
                    <div>{!! $filiere->outCome !!}</div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</section>
@if ($filiere->specialites->count() > 0)
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