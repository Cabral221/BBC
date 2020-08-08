@extends('layouts.user.app', ['title' => 'Admission'])

@section('css')
<style>
    /* Style the button that is used to open and close the collapsible content */
    .collapsible {
        background-color: black;
        color: white;
        cursor: pointer;
        padding: 18px;
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
        background-color: #ccc;
    }
    
    /* Style the collapsible content. Note: hidden by default */
    .content {
        color: white;
        padding: 0 18px;
        background-color: black;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
    }
</style>
@endsection

@section('text-header')
<!-- Header -->
<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{ $image->image }}" data-speed="0.7">
    <div class="section-inner pad-top-200">
        <div class="container vertical-center">
            <div class="intro-text vertical-center text-center smoothie">
                <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s"><h1>Time to learn !</h1></div>
                <div class="intro-sub-heading wow fadeIn secondary-font" data-wow-delay="0.4s">The first UK university in <span class="rotate">Dakar, Senegal</span></div>
                {{-- <h4 href="#" class="btn btn-primary mt-5"><h4>Admission</h4></h4> --}}
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<div class="container">
    <h2 class="text-center text-dark">Build your admission</h2>
    @if (1 === 1)
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if(session('errors'))
                    <div class="alert alert-danger">{{ $errors->first() }}</div>
                @endif
                <div class="text-dark">
                    <form action="{{ route('user.admission') }}" method="post" class="form from-admission" id="form-admission">
                        @csrf
                        <div class="form-group mb-4">
                            <div class="select-style">
                                <select class="form-control" id="program" name="program_id">
                                    <option value="" default>Select a program</option>
                                    @foreach ($programs as $program)
                                        <option value="{{ $program->id }}">{{ strtoupper($program->libele) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="select-style">
                                <select class="form-control" id="filiere" name="filiere_id">
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="col-sm-6 p-1">
                                <div class="form-group">
                                    <label for="First Name" class="control-label sr-only" sr-only>First Name</label>
                                    <input type="text" placeholder="First name *" class="input-admission" name="firstname" id="firstname" required="required">
                                </div>
                            </div>
                            <div class="col-sm-6 p-1">
                                <div class="form-group">
                                    <label for="lastname" class="control-label sr-only">Last Name</label>
                                    <input type="text" placeholder="Last name *" class="input-admission" name="lastname" id="lastname" required="required">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-6 p-1">
                                <div class="form-group">
                                    <label for="email" class="control-label sr-only">Email</label>
                                    <input type="email" placeholder="Email *" class="input-admission" name="email" id="name" required="required">
                                </div>
                            </div>
                            <div class="col-sm-6 p-1">
                                <div class="form-group">
                                    <label for="phone" class="control-label sr-only">Phone</label>
                                    <input type="number" placeholder="Phone *" class="input-admission" name="phone" id="phone" require="required">
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" id="submit-adminssion" onclick="document.getElementById('form-admission').submit()" class="btn btn-block btn-danger p-4"><b>Send</b></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="alert-info p-5">
                    <h2>Sorry !</h2>
                    <p>Cette page est actuellement en maintenance. Veillez nous contacter pour soummettre votre demande d'admission. Merci !</p>
                </div>
                <hr>
                <a href="{{ route('user.contact') }}" class="btn btn-success btn-lg btn-block">Contacter nous</a>
            </div>
        </div>
    @endif
</div>
<div>
</div>

{{-- Carousel galery --}}
<section class="opaqued light-opaqued parallax">
    <div class="section-inner">
        <div class="container">
            <div class="row"><h3 class="text-dark text-center">BBC on images</h3></div>
            <div class="row">
                <div class="col-12">
                    @if (isset($galeries) && $galeries->count() > 0)
                        <ul class="owl-carousel-paged testimonial-owl wow fadeIn list-unstyled" data-items="4" data-items-desktop="[1200,4]" data-items-desktop-small="[980,4]" data-items-tablet="[768,3]" data-items-mobile="[479,2]">
                            @foreach ($galeries as $galery)
                                <li>
                                    <img src="{{ $galery->image }}" class="img-responsive" alt="">
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p class="text-center text-dark">Aucune image dans la galerie pour le moment...</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
{{-- /end Carousel galery --}}

@endsection

@section('js')
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
<script src="{{ asset('js/user/admission.js') }}"></script>
@endsection

