@extends('layouts.user.app')

@section('text-header')
<!-- Header -->
<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{asset('assets/img/bg/bg2.jpg')}}" data-speed="0.7">
    <div class="section-inner pad-top-200">
        <div class="container vertical-center">
            <div class="intro-text vertical-center text-center smoothie">
                <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s"><h2>Contact us !</h2></div>
                <div class="intro-sub-heading wow fadeIn secondary-font" data-wow-delay="0.4s">The first UK university in <span class="rotate">Dakar, Senegal</span></div>
                <a href="{{ route('user.admission') }}" class="btn btn-primary mt-5"><h4>Admission</h4></a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section id="welcome">
    <div class="section pt-5 pb-5">

        <div class="container">
            <div class="row">
                <div class="col-md-6 text-dark">
                    <div class="row">
                        <table class="table">
                            <tr>
                                <td>Address</td>
                                <td>{{ $info->adress }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $info->phone }}</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>{{ $info->phone }}</td>
                            </tr>
                            <tr>
                                <td>Postal</td>
                                <td>{{ $info->bp }}</td>
                            </tr>
                        </table>
                    </div>
                    <p class="lead">Sold old ten are quit lose deal his sent. You correct how sex several far distant believe journey parties. We shyness enquire uncivil affixed it carried to. </p>
                    <p>End sitting shewing who saw besides son musical adapted. Contrasted interested eat alteration pianoforte sympathize was. He families believed if no elegance interest surprise an. It abode wrong miles an so delay plate.</p>
                    
                </div>

                <div class="col-md-6">
                    <div id="message"></div>
                    <form method="post" action="sendemail.php" id="contactform" class="main-contact-form wow">
                        <input type="text" style="border-color:black;" class="form-control col-md-4 text-dark" name="name" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name." />
                        <input type="text" style="border-color:black;" class="form-control col-md-4 text-dark" name="email" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address." />
                        {{-- <input type="text" style="border-color:black;" class="form-control col-md-4 text-dark" name="website" placeholder="Your URL *" id="website" required data-validation-required-message="Please enter your web address." /> --}}
                        <textarea name="comments" style="border-color:black;" style="border-color:black;" class="form-control text-dark" id="comments" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                        <button class="btn btn-danger btn-block mt30 pull-left" type="submit"> <h4> Send</h4></button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
<div style="">
    <h1 class="text-center text-dark">Visit us !</h1>
    @map([
    'lat' => 48.134664,
    'lng' => 11.555220,
    'zoom' => 6,
    'markers' => [
        [
            'title' => 'Go NoWare',
            'lat' => 48.134664,
            'lng' => 11.555220,
            'url' => 'https://gonoware.com',
        ],
    ],
])
</div>
<div class="followers bg-primary">
    <div class="container">
        <div class="row mb-0">
            <div class="col-md-6 mb-0">
                <div class="text-center">
                    <h2>Subscriber on newsLetter</h2>
                    <p>Abonnez-vous pour recevoir les nouvelles de l'institut</p>
                </div>
            </div>
            <div class=" col-md-6 vertical-center">
                <form action="#" class="form">
                    <div class="vertical-center text-center input-group" style="width:100%">
                        <input type="text" class="form-control text-center" style="width: 70%;color:black" id="validationCustomUsername" placeholder="Your email" aria-describedby="inputGroupPrepend" required>
                        <div class="input-group-prepend border-0" style="display:inline-block;float:left">
                            <button type="submit" class="bg-danger border-0" style="margin-left: 3px;height:40px;width:40px"><span class="bg-danger border-0"><i class="fas fa-paper-plane" style="font-size:20px;color:white;"></i></span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    // $(window).ready(function() {
        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('googlemap'), {
                    center: {lat: -34.397, lng: 150.644},
                    zoom: 5
                });
        }
    // }
  </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUK-yTMNJg4GpQGHRJrJA15qO7ra1PN44&callback=initMap" async defer></script>
@endsection