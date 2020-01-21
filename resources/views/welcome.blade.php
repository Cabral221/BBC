@extends('layouts.user.app')

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
    <div class="container bg-dark">
        <div class="row mt-4">
            <button type="button" class="collapsible text-center"><h4 style="display:inline">Word of Director</h4></button>
            <div class="content mb-3">
                <div class="text-white">
                    <div class="word-of mt-2 text-center text-white">
                        
                        <div class="row text-left">
                            <div class="col-md-3 col-sm-3">
                                <img src="{{asset('assets/img/news/1.jpg')}}" class="img-responsive" alt="" srcset="">
                                <h4>Dr Séne, BBC Director</h4>
                            </div>
                            <div class="col-md-9 col-sm-9">
                                <p>Nisi labore ipsum duis veniam ex amet esse. Elit nisi amet voluptate nisi consectetur nulla adipisicing elit ullamco excepteur. Est deserunt sint ad veniam deserunt consequat id duis mollit cillum et. Nisi reprehenderit consequat esse ut occaecat ea id sint exercitation aliquip. Incididunt ipsum sit cupidatat fugiat duis adipisicing velit in tempor amet ut esse. Qui laborum consequat duis laboris deserunt labore ex enim occaecat quis.
                                </p>
                                <p>Nisi labore ipsum duis veniam ex amet esse. Elit nisi amet voluptate nisi consectetur nulla adipisicing elit ullamco excepteur. Est deserunt sint ad veniam deserunt consequat id duis mollit cillum et. Nisi reprehenderit consequat esse ut occaecat ea id sint exercitation aliquip. Incididunt ipsum sit cupidatat fugiat duis adipisicing velit in tempor amet ut esse. Qui laborum consequat duis laboris deserunt labore ex enim occaecat quis.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<section class="white-wrapper opaqued parallax" data-image-src="{{ asset('images/bg-header3.jpg') }}" data-speed="0.7">
    <div class="mt-5 mb-5">
        <div class="container text-dark">
            <h2>Programs</h2>
            <p>Ipsum minim amet qui Lorem eiusmod ea officia non quis velit. Deserunt ex sunt adipisicing aliquip amet proident ea duis qui culpa. Anim mollit do et adipisicing qui minim pariatur amet ut in amet. Ea anim velit quis ullamco mollit ut ad laboris aute mollit sint. Anim ex commodo sunt exercitation esse exercitation sit amet labore veniam nostrud.</p>
            <button type="button" class="collapsible">Engilsh</button>
            <div class="content mb-3">
                <div class="section-inner text-white">
                    
                    <div class="row text-center">
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                            <div class="icon-box-1 match-height mb30">
                                <i class="fa-4x pe-7s-camera"></i>
                                <div class="card" style="background-color:black;">
                                    <a href="#" class="program-title"><h3 class="car-title">Web Design</h3></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                            <div class="icon-box-1 match-height mb30">
                                <i class="fa-4x pe-7s-camera"></i>
                                <div class="card" style="background-color:black;">
                                    <a href="#" class="program-title"><h3 class="car-title">Web Design</h3></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                            <div class="icon-box-1 match-height mb30">
                                <i class="fa-4x pe-7s-camera"></i>
                                <div class="card" style="background-color:black;">
                                    <a href="#" class="program-title"><h3 class="car-title">Web Design</h3></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <button type="button" class="collapsible">French</button>
            <div class="content mb-3">
                <div class="section-inner text-white">
                    
                    <div class="row text-center">
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                            <div class="icon-box-1 match-height mb30">
                                <i class="fa-4x pe-7s-camera"></i>
                                <div class="card" style="background-color:black;">
                                    <a href="#" class="program-title"><h3 class="car-title">Web Design</h3></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                            <div class="icon-box-1 match-height mb30">
                                <i class="fa-4x pe-7s-camera"></i>
                                <div class="card" style="background-color:black;">
                                    <a href="#" class="program-title"><h3 class="car-title">Web Design</h3></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                            <div class="icon-box-1 match-height mb30">
                                <i class="fa-4x pe-7s-camera"></i>
                                <div class="card" style="background-color:black;">
                                    <a href="#" class="program-title"><h3 class="car-title">Web Design</h3></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

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
            <a href="{{ route('user.posts.index') }}" class="btn btn-primary p-3 mt-3 mb-5" style="border-radius: 10px;">See more +</a>
        </div>
    </div>
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
            <div class=" col-md-6 vertical-center text-center">
                <form action="#" class="form vertical-center">
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

<!-- Modal Alert -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content text-dark">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Welcome aboard</h4>
        </div>
        <div class="modal-body">
          <div>
              <h4>Titre</h4>
              <p>Minim duis pariatur laboris et reprehenderit adipisicing deserunt consequat laboris cupidatat.</p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary p-3">Send</button>
        </div>
      </div>
    </div>
</div>  
@endsection

@section('js')
<script>
    $(window).on('load',function(){
        $('#myModal').modal('show');
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
            duration: 8000,
            fade: 500
        });
    });
</script>
@endsection