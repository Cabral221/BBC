@extends('layouts.user.app')

@section('text-header')
<!-- Header -->
<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{asset('assets/img/bg/bg2.jpg')}}" data-speed="0.7">
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
    <div class="row">
        <div class="container text-dark">
            <div class="col-sm-8">
                <div class="bg-blue p-5">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
                            <img src="{{ asset($filiere->icon) }}" class="img-responsive img-circle" style="bg-white" alt="" srcset="">
                        </div>
                        <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9">
                            <h3>{{ $filiere->program->libele . ' : ' .$filiere->libele }}</h3>
                            <ul>
                                <li>{{ $filiere->describe }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="text-center">
                    <img src="{{ asset('images/image1.png') }}" alt="" srcset="">
                    <div class="text">
                        <h2>Mr Doe John</h2>
                        <h5>Director des programs</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="row">
        <div class="container text-dark">
            <h2 class="text-center p-5">Degrees : @foreach ($filiere->program->diplomes as $diplome)
                {{ $diplome->libele }} / 
            @endforeach</h2>
            <div>
                <table class=table style="border-left: none;">
                    <tr>
                        <td style="width:30%" class="vertical-center"><h3>Course Duration</h3></td>
                        <td>{{ $filiere->duration }}</td>
                    </tr>
                    <tr>
                        <td class="vertical-center"><h3>Course entry requirement</h3></td>
                        <td>{{ $filiere->requirement }}</td>
                    </tr>
                    <tr>
                        <td class="vertical-center"><h3>Course Learning Outcome</h3></td>
                        <td>{{ $filiere->outCome }}</td>
                    </tr>
                    <tr>
                        <td class="vertical-center"><h3>Modules</h3></td>
                        <td>        
                            <ul>
                                @if ($filiere->mudules != null)
                                    @foreach ($filiere->modules as $module)
                                        <li>{{ $module->lebele }}</li>
                                    @endforeach
                                @else
                                    <p>Aucun module pour ce filiere...</p>
                                @endif
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
    <div class="row bg-primary">
        <div class="container">
            <h2 class="text-center">Spécialisation</h2>
            <table class="table">
                <tr>
                    <th>
                        <td>Finance</td>
                        <td>Marketing</td>
                        <td>Manegment</td>
                        <td>Human Resource Managment</td>
                    </th>
                </tr>
            </table>
        </div>
    </div>
@endsection