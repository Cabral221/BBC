@extends('layouts.user.app')

@section('css')
<style>
    /* Style the button that is used to open and close the collapsible content */
    .collapsible {
        background-color: #3490dc;
        color: white;
        cursor: pointer;
        padding: 20px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        text-transform: uppercase;
        font-weight: bold;
    }
    .collapsible:after {
        content: '\02795'; /* Unicode character for "plus" sign (+) */
        font-size: 14px;
        color: #e3342f;
        float: right;
        margin-left: 5px;
    }
    
    .active:after {
        content: "\2796"; /* Unicode character for "minus" sign (-) */
    }
    
    /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
    .active, .collapsible:hover {
        background-color: black;
    }
    
    /* Style the collapsible content. Note: hidden by default */
    .content {
        border: 1px solid red;
        color: black;
        padding: 0 18px;
        background-color: white;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
    }
</style>
@endsection

@section('text-header')
<!-- Header -->
<header id="headerwrap" class="dark-wrapper backstretched special-max-height no-overlay">
    <div class="container vertical-center">
        <div class="intro-text vertical-center text-center smoothie">
            <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s">WELCOME TO BBC</div>
            <div class="intro-sub-heading wow fadeIn secondary-font" data-wow-delay="0.4s">The first UK university in <span class="rotate">Dakar, Senegal</span></div>
            <a href="{{ route('user.admission') }}" class="btn btn-primary mt-5"><h4>Admission</h4></a>
        </div>
    </div>
</header>
@endsection

@section('content')
<div class="white-wrapper">
    <div class="container">
        <div class="row mt-4">
            <button type="button" class="collapsible text-center"><h4 style="display:inline" class="pt-5">Word of welcome</h4></button>
            <div class="content mb-3">
                <div class="text-white">
                    @if (isset($word) && $word != null)
                        <div class="word-of mt-2 text-center text-dark">
                            
                            <div class="row text-left">
                                <div class="col-md-3 col-sm-3">
                                    <img src="{{asset($word->team->image)}}" class="img-responsive img-wording" alt="" srcset="">
                                    <h4>{{ $word->team->firstname .' ' . strtoupper($word->team->lastname) }}, {{ $word->team->job }}</h4>
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    {!! $word->content !!}
                                </div>
                            </div>
                        </div>
                    @else
                        <p>En cours de redaction... </p>                        
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<section class="white-wrapper opaqued parallax" data-image-src="{{ asset('images/bg-header3.jpg') }}" data-speed="0.7">
    <div class="mt-5 mb-5">
        <div class="container text-dark">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Programs</h2>
                    <p>Our Mission is to create a first class British university in Senegal, offering British university degrees and solid links with universities in the United Kingdom. With its different streams including English, Business Administration (options: Management, Marketing, Human Resources, or Finance / Banking), Supply Chain Management, your new university wants to facilitate off-site access to British higher degrees. The BBC wants to offer international qualifications (HND 1 & 2, BBA, MBA) at an affordable cost, in order to open up job opportunities for Africans both at home and abroad. To restore hope to those who have been denied a UK visa due to the exorbitant costs of studying and traveling abroad, through two-year postgraduate studies here in Dakar, Senegal leading to a graduate programs in the UK.</p>
                    <div class="pb-3">Click on a program to see our sector <span class="badge badge-pill text-uppercase">+</span></div>
                    @if (isset($programs) && $programs->count() > 0)
                        @foreach ($programs as $program)
                            <button type="button" class="collapsible">
                                <div style="display: inline">
                                    <div class="col text-left">{{ strtoupper($program->libele) }}</div>
                                    <small class="col text-right mr-5">Degree: 
                                        @foreach($program->diplomes as $diplome)
                                            <span class="text-danger">{{ $diplome->libele }} </span> | 
                                        @endforeach
                                    </small>
                                </div>
                            </button>
                            <div class="content mb-3">
                                <div class="section-inner22 text-white">
                                    <div class="row text-center pl-3 pr-3">
                                        @if ($program->filieres->count() > 0)
                                            @foreach ($program->filieres as $filiere)
                                                <div class="card p-4 col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                                                    <div class="icon-box-1 match-height mb20">
                                                        <img src="{{ asset($filiere->icon) }}" alt="" width="100px" srcset="">
                                                    </div>
                                                    <div class="text-dark pt-2" style="color:black;">
                                                        <a href="{{ route('user.programs.show',$filiere->id) }}" class="program-title">
                                                            <h4 class="card-title">{{ strtoupper($filiere->libele) }}</h4>
                                                            
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <p>Pas de filieres pour ce programme...</p>
                                        @endif

                                    </div>
                                    
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p class="text-dark">Pas de programmes pour le moment...</p>
                    @endif
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="alert alert-info"><h3><span><i class="fas fa-info-circle"></i></span> News</h3></div>
                        <div class="card-body">
                            <div> Chers(es) Etudiants(es),Nous avons le plaisir de vous annoncer notre nouvelle session des cours de renforcement en Anglais <strong> Jour & soir </strong>qui démarre à partir du <span class="text-info"><strong>lundi 22 Juin 2020</strong></span> .Les inscriptions ont commencé et se poursuivent. Pour toutes informations, veuillez contacter:</div>
                            <div class="text-center">
                                <h5>MR Koffi Adika au 77 846 03 06</h5>
                                <h5>MR Dauda Bangura au 78 521 55 03</h5>
                            </div>
                            <div class="text-info">NB: Place limitée!!!</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@if (isset($posts) && $post->coun() > 0)
<div class="bg-white text-center text-dark">
    <div class="container mt-3">
        <h3>Latest activities</h3>
        <div class="row text-dark">
            <div class="col-sm-3 p-3 mt-3 mb-3">
                <div class="activity">
                    <div class="card">
                        <div class="card-title">
                            <img src="{{ asset('images/img-test.jpg') }}" alt="" srcset="" class="img-responsive">
                        </div>
                        <div class="card-title text-left mt-3 mb-3 pl-3 pr-3 pt-3 pb-3">
                            <a href="#">
                                <h5 style="display:inline" class="text-left">BBC Graduation 2019  Dr Séne, BBC Director</h5>
                                <p style="float:right;display:inline">March, 12</p>
                            </a>
                        </div>
                        <div class="card-body">
                            <p class="text-left">Quis nulla cillum esse fugiat anim aliquip laborum. Labore qui laborum nostrud est adipisicing amet dolor do excepteur. Tempor qui consequat ea qui laborum reprehenderit. Elit excepteur magna commodo est ullamco ad laboris ex in tempor tempor et id ex.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 p-3 mt-3 mb-3">
                <div class="activity">
                    <div class="card">
                        <div class="card-title">
                            <img src="{{ asset('images/img-test.jpg') }}" alt="" srcset="" class="img-responsive">
                        </div>
                        <div class="card-title text-left mt-3 mb-3 pl-3 pr-3">
                            <a href="#">
                                <h5 style="display:inline" class="text-left">BBC Graduation 2019</h5>
                                <p style="float:right;display:inline">March, 12</p>
                            </a>
                        </div>
                        <div class="card-body">
                            <p class="text-left">Quis nulla cillum esse fugiat anim aliquip laborum. Labore qui laborum nostrud est adipisicing amet dolor do excepteur. Tempor qui consequat ea qui laborum reprehenderit. Elit excepteur magna commodo est ullamco ad laboris ex in tempor tempor et id ex.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 p-3 mt-3 mb-3">
                <div class="activity">
                    <div class="card">
                        <div class="card-title">
                            <img src="{{ asset('images/img-test.jpg') }}" alt="" srcset="" class="img-responsive">
                        </div>
                        <div class="card-title text-left mt-3 mb-3 pl-3 pr-3">
                            <a href="#">
                                <h5 style="display:inline" class="text-left">BBC Graduation 2019</h5>
                                <p style="float:right;display:inline">March, 12</p>
                            </a>
                        </div>
                        <div class="card-body">
                            <p class="text-left">Quis nulla cillum esse fugiat anim aliquip laborum. Labore qui laborum nostrud est adipisicing amet dolor do excepteur. Tempor qui consequat ea qui laborum reprehenderit. Elit excepteur magna commodo est ullamco ad laboris ex in tempor tempor et id ex.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 p-3 mt-3 mb-3">
                <div class="activity">
                    <div class="card">
                        <div class="card-title">
                            <img src="{{ asset('images/img-test.jpg') }}" alt="" srcset="" class="img-responsive">
                        </div>
                        <div class="card-title text-left mt-3 mb-3 pl-3 pr-3">
                            <a href="#">
                                <h5 style="display:inline" class="text-left">BBC Graduation 2019</h5>
                                <p style="float:right;display:inline">March, 12</p>
                            </a>
                        </div>
                        <div class="card-body">
                            <p class="text-left">Quis nulla cillum esse fugiat anim aliquip laborum. Labore qui laborum nostrud est adipisicing amet dolor do excepteur. Tempor qui consequat ea qui laborum reprehenderit. Elit excepteur magna commodo est ullamco ad laboris ex in tempor tempor et id ex.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center text white">
            <a href="{{ route('user.posts.index') }}" class="btn btn-primary btn-bg-primary p-3 mt-3 mb-5" style="border-radius: 10px;">See more +</a>
        </div>
    </div>
</div>
@endif

<div class="bg-white text-center text-dark">
    <div class="container mt-3">
        <h3>Testimonials</h3>
        <div class="row text-dark">
            @if (isset($attests) && $attests->count() > 0)
                @foreach ($attests as $attest)
                    <div class="col-sm-4 col-md-3 col-xs-6 p-3">
                        <div class="testi">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title pt-3 pb-3">
                                        <h5 style="display:inline" class="header">{{ $attest->author }}</h5>
                                    </div>
                                    <div class="card-text text-muted">{!! $attest->attest !!}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-dark">Pas de temoignage poure le moment...</p>
            @endif
        </div>
        <div class="row text-center text white">
            <a href="{{ route('user.attest') }}" class="btn btn-primary btn-bg-primary p-3 mt-3 mb-5" style="border-radius: 10px;">See more +</a>
        </div>
    </div>
</div>

<div class="bg-dark">
    <div class="container mt-3">

        <h3 class="text-center">Utils documents</h3>
        @if (isset($docs) && $docs->count() > 0)
        <div class="row pt-5 pb-5 text-white text-bold">
            @foreach ($docs as $doc)
                <div class=" col-sm-6 col-xl-6 text-white p-3">
                    <div class="row">
                        <div class="col-sm-6 col-xs-6">
                            <span style="font-size: 20px;font-weight:bold">{{ $doc->name }}</span> 
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <a href="{{ asset($doc->url) }}" class="document">Download <i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $docs->links() }}
        @else
            <p>Aucun document pour le moment</p>
        @endif  
            
    </div>
</div>

{{-- Carousel galery --}}
<section class="opaqued light-opaqued parallax">
    <div class="section-inner2">
        <div class="container">
            <div class="row"><h3 class="text-dark text-center">BBC on images</h3></div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    @if (isset($galeries) && $galeries->count() > 0)
                        <ul class="owl-carousel-paged testimonial-owl wow fadeIn list-unstyled" data-items="4" data-items-desktop="[1200,4]" data-items-desktop-small="[980,4]" data-items-tablet="[768,3]" data-items-mobile="[479,2]">
                            @foreach ($galeries as $galery)
                                <li>
                                    <img src="{{ $galery->image }}" class="img-responsive" alt="">
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p class="text-center text-dark">Aucune image de la galerie pour le moment...</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
{{-- /end Carousel galery --}}

{{-- Followors --}}
<div class="followers bg-primary">
    <div class="container">
        <div class="row row-follow mb-0">
            <div class="col-md-6 mb-0">
                <div class="text-center">
                    <h2>Subscriber on newsLetter</h2>
                    <p>Subscribe to receive news from the institute</p>
                </div>
            </div>
            <div class=" col-md-6 text-center">
                <form action="{{ route('user.networks.store') }}" method="post" id="form-network" style="display:flex;">
                    @csrf
                    <div class="text-center input-group" style="width:100%;display:flex;">
                        <input type="text" name="email" class="form-control text-center @error('email') is-invalid @enderror" style="color:black" id="validationCustomUsername" placeholder="Your email" aria-describedby="inputGroupPrepend" required>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="input-group-prepend border-0" style="display:inline-block;float:left">
                            <a href="{{ route('user.networks.store') }}" onclick="event.preventDefault();document.getElementById('form-network').submit();" class="btn btn-danger bg-danger ml-1" style="height:40px;">
                                <span class="bg-danger border-0"><i class="fas fa-paper-plane" style="font-size:20px;color:white;"></i></span>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- end Followers --}}

<!-- Modal Alert -->
<div class="modal fade" id="newsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-dark">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Welcome to BBC University</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-info">
                    <div class="mt-auto mr-auto mb-3 text-center">
                        <img src="{{ asset('images/logo1.png') }}" width="100px" alt="BBC University">
                    </div>
                </div>
                <div> Chers(es) Etudiants(es), Nous avons le plaisir de vous annoncer notre nouvelle session des cours de renforcement en <strong><span style="font-size: 1.5rem;">Anglais</span> Jour & soir </strong>qui démarre à partir du <span class="text-info"><strong>lundi 22 Juin 2020</strong></span> .Les inscriptions ont commencé et se poursuivent. Pour toutes informations, veuillez contacter:</div>
                <div class="mr-auto ml-auto text-center">
                    <h5>MR Koffi Adika au 77 846 03 06</h5>
                    <h5>MR Dauda Bangura au 78 521 55 03</h5>
                </div>
                <div class="text-info">NB: Place limitée !!!</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>  
@endsection

@section('js')
    <script>
        $(window).on('load',function(){
            $('#newsModal').modal('show');
        });
    </script>
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;
        
        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight){
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                } 
            });
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            'use strict';
            jQuery('#headerwrap').backstretch([
                @foreach($slides as $slide)
                ["{{ asset($slide->image) }}"],
                @endforeach
            ], {
                duration: 5000,
                fade: 500
            });
        });
    </script>
@endsection