@extends('layouts.user.app', ['title' => 'Program'])

@section('text-header')
<!-- Header -->
<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{asset('assets/img/bg/bg2.jpg')}}" data-speed="0.7">
    <div class="section-inner pad-top-200">
        <div class="container vertical-center">
            <div class="intro-text vertical-center text-center smoothie">
                <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s"><h1>View all programs</h1></div>
                <div class="intro-sub-heading wow fadeIn secondary-font" data-wow-delay="0.4s">The first UK university in <span class="rotate">Dakar, Senegal</span></div>
                <a href="{{ route('user.admission') }}" class="btn btn-primary mt-5"><h4>Admission</h4></a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
    <div class="container">
        <hr>
        <div class="row text-dark">
            <div class="col-xs-12 col-sm-8 text-dark">
                <div>
                    <p>Choosing your program of study can become a stressful decision for some of you. The training you choose should, in the best of all worlds, reflect the person you are. There is a good chance that you will succeed in your studies when they interest and motivate you. Think about the types of activities you organize, the courses that have attracted your attention the most, or your strengths and weaknesses in the different subjects.</p>
                    <p>BBC University offers a British program, Canadian and French.</p>
                </div>
                @if (isset($programs) && $programs->count())
                    @foreach ($programs as $program)
                            <div class="col-12"><h2 class="text-center">{{ $program->libele }}</h2></div>
                            @if ($program->filieres->count() > 0)
                                @foreach ($program->filieres as $filiere)
                                    {{-- <div class="row"> --}}
                                        <div class="col-12 blog-item mb10">
                                            <a href="{{ route('user.programs.show',[$program, $filiere]) }}">
                                                <div class="program col-xs-12 mt-3 mb-3">
                                                    <div class="media row">
                                                        <div class="pull col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
                                                            <img 
                                                            class="img-circle img-responsive img-centered" 
                                                            style="padding:10px; width:60%;" 
                                                            src="{{ $filiere->icon }}" 
                                                            alt="logo-{{$filiere->slug}}">
                                                        </div>
                                                        <div class="media-body col-xs-12 col-sm-8 col-md-8 col-lg-8">
                                                            <H4 class="media-heading"><h4>{{ $filiere->libele }}</h4></H4>
                                                            <p>{!! $filiere->truncateDescribe(100) !!}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    {{-- </div> --}}
                                @endforeach
                            @else
                                <p>Aucun filieres pour ce programme...</p>
                            @endif
                            <hr>
                    @endforeach
                @else
                    <p>Aucun type de programme pour le moment...</p>
                @endif
            </div>
            <div class="col-xs-12 col-sm-4">
                <h4 class="">Latest News</h4>
                <div class="widget mb50">
                    @if (isset($news) && $news->count() > 0)
                        @foreach ($news as $new)
                            <div class="mt-3 mb-3">
                                <a href="{{route('user.news.show',$new)}}">
                                    <div class="card">
                                        <div class="card-header">
                                            {{ $new->title }}
                                            <div>
                                                <em>{{ $new->date }}</em>
                                                {{-- <u class="text-right">details</u> --}}
                                            </div>
                                            
                                        </div>
                                    </div>            
                                </a>
                            </div>
                        @endforeach
                    @else
                        <div class="media">
                            <p>No event for the moment...</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection