@extends('layouts.user.app')


@section('text-header')
<!-- Header -->
<header id="headerwrap" class="dark-wrapper backstretched special-max-height no-overlay">
    <div class="container vertical-center">
        <div class="intro-text vertical-center text-center smoothie">
            <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s">WELCOME TO BBC</div>
            <div class="intro-sub-heading wow fadeIn secondary-font" data-wow-delay="0.4s">The first UK university in <span class="rotate">Dakar, Senegal</span></div>
            <a href="submit" class="btn btn-primary mt-5"><h4>Admission</h4></a>
        </div>
    </div>
</header>
@endsection

@section('content')
<div class="container">
    <div class="word-of mt-2 text-center text-dark">
        <div class="">
            <h2>Dr Séne, BBC Director</h2>
        </div>
        <div class="row">
            <div class="col-md-3">
                <img src="#" style="height:200px" alt="" srcset="">
            </div>
            <div class="col-md-9">
                <p>Lorem Ipsum Dolores, Lorem Ipsum Dolores, Lorem Ipsum Dolores, Lorem Ipsum Dolores.
                    Lorem Ipsum Dolores, Lorem Ipsum Dolores, Lorem Ipsum Dolores, Lorem Ipsum Dolores.
                    Lorem Ipsum Dolores, Lorem Ipsum Dolores, Lorem Ipsum Dolores, Lorem Ipsum Dolores.
                    Lorem Ipsum Dolores, Lorem Ipsum Dolores, Lorem Ipsum Dolores, Lorem Ipsum Dolores.
                    Lorem Ipsum Dolores, Lorem Ipsum Dolores, Lorem Ipsum Dolores, Lorem Ipsum Dolores.
                    Lorem Ipsum Dolores, Lorem Ipsum Dolores, Lorem Ipsum Dolores, Lorem Ipsum Dolores.
                    Lorem Ipsum Dolores, Lorem Ipsum Dolores, Lorem Ipsum Dolores, Lorem Ipsum Dolores.
                    Lorem Ipsum Dolores, Lorem Ipsum Dolores, Lorem Ipsum Dolores, Lorem Ipsum Dolores.
                </p>
            </div>
        </div>
    </div>
</div>
<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{ asset('images/bg-header3.jpg') }}" data-speed="0.7">
    <div class="section-inner">
        <div class="container">
            {{-- Collapse for programs --}}
            <div class="row">
                <div class="col-sm-12 col-md-12 col-xs-12 text-dark">
                    <h1>Programs</h1>
                </div>
            </div>
            <div class="row bg-dark text-center">
                <div class="col-sm-12 col-md-12 col-xs-12 text-dark">
                    <div id="faq" role="tablist" aria-multiselectable="true">
                        
                        <div class="panel panel-dark">
                            <div class="panel-heading" role="tab" id="questionThree">
                                <h5 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#answerThree" aria-expanded="true" aria-controls="answerThree">
                                        Mark
                                    </a>
                                </h5>
                            </div>
                            <div id="answerThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="questionThree">
                                <div class="panel-body">
                                    Answer 3...
                                </div>
                            </div>
                        </div>
                        
                        <div class="panel panel-dark" style="height:auto">
                            <div class="panel-heading" role="tab" id="questionOne">
                                <h3 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#faq" href="#answerOne" aria-expanded="false" aria-controls="answerOne">
                                        English 
                                        <i class="fa-1x pe-7s-plus"></i>
                                    </a>
                                </h3>
                            </div>
                            <div id="answerOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="questionOne" style="height:auto">
                                <div class="panel-body">
                                    <div class="row">
                                        
                                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                                            <div class="icon-box-1 match-height mb30">
                                                <i class="fa-4x pe-7s-camera"></i>
                                                <div class="content-area">
                                                    <h4 class="title">Business</h4>
                                                    <div class="content">Goodbye gray sky hello blue. There's nothing can hold me when I hold you. Feels so right it cant be wrong.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                                            <div class="icon-box-1 match-height mb30">
                                                <i class="fa-4x pe-7s-camera"></i>
                                                <div class="content-area">
                                                    <h4 class="title">Sport Management</h4>
                                                    <div class="content">Goodbye gray sky hello blue. There's nothing can hold me when I hold you. Feels so right it cant be wrong.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                                            <div class="icon-box-1 match-height mb30">
                                                <i class="fa-4x pe-7s-camera"></i>
                                                <div class="content-area">
                                                    <h4 class="title">Tourism</h4>
                                                    <div class="content">Goodbye gray sky hello blue. There's nothing can hold me when I hold you. Feels so right it cant be wrong.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                                            <div class="icon-box-1 match-height mb30">
                                                <i class="fa-4x pe-7s-camera"></i>
                                                <div class="content-area">
                                                    <h4 class="title">Web Design</h4>
                                                    <div class="content">Goodbye gray sky hello blue. There's nothing can hold me when I hold you. Feels so right it cant be wrong.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                                            <div class="icon-box-1 match-height mb30">
                                                <i class="fa-4x pe-7s-camera"></i>
                                                <div class="content-area">
                                                    <h3 class="title">Web Design</h3>
                                                    <div class="content">Goodbye gray sky hello blue. There's nothing can hold me when I hold you. Feels so right it cant be wrong.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                                            <div class="icon-box-1 match-height mb30">
                                                <i class="fa-4x pe-7s-camera"></i>
                                                <div class="content-area">
                                                    <h4 class="title">Web Design</h4>
                                                    <div class="content">Goodbye gray sky hello blue. There's nothing can hold me when I hold you. Feels so right it cant be wrong.</div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>    
                        <div class="panel panel-dark">
                            <div class="panel-heading" role="tab" id="questionTwo">
                                <h5 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#answerTwo" aria-expanded="false" aria-controls="answerTwo">
                                        <h3 style="display:inline-block;">French</h3> 
                                        <i class="fa-2x pe-7s-plus"></i>
                                    </a>
                                </h5>
                            </div>
                            <div id="answerTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="questionTwo">
                                <div class="panel-body">
                                    <div class="row">
                                        
                                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                                            <div class="icon-box-1 match-height mb30">
                                                <i class="fa-4x pe-7s-camera"></i>
                                                <div class="content-area">
                                                    <h4 class="title">Business</h4>
                                                    <div class="content">Goodbye gray sky hello blue. There's nothing can hold me when I hold you. Feels so right it cant be wrong.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                                            <div class="icon-box-1 match-height mb30">
                                                <i class="fa-4x pe-7s-camera"></i>
                                                <div class="content-area">
                                                    <h4 class="title">Sport Management</h4>
                                                    <div class="content">Goodbye gray sky hello blue. There's nothing can hold me when I hold you. Feels so right it cant be wrong.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                                            <div class="icon-box-1 match-height mb30">
                                                <i class="fa-4x pe-7s-camera"></i>
                                                <div class="content-area">
                                                    <h4 class="title">Tourism</h4>
                                                    <div class="content">Goodbye gray sky hello blue. There's nothing can hold me when I hold you. Feels so right it cant be wrong.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                                            <div class="icon-box-1 match-height mb30">
                                                <i class="fa-4x pe-7s-camera"></i>
                                                <div class="content-area">
                                                    <h4 class="title">Web Design</h4>
                                                    <div class="content">Goodbye gray sky hello blue. There's nothing can hold me when I hold you. Feels so right it cant be wrong.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                                            <div class="icon-box-1 match-height mb30">
                                                <i class="fa-4x pe-7s-camera"></i>
                                                <div class="content-area">
                                                    <h3 class="title">Web Design</h3>
                                                    <div class="content">Goodbye gray sky hello blue. There's nothing can hold me when I hold you. Feels so right it cant be wrong.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                                            <div class="icon-box-1 match-height mb30">
                                                <i class="fa-4x pe-7s-camera"></i>
                                                <div class="content-area">
                                                    <h4 class="title">Web Design</h4>
                                                    <div class="content">Goodbye gray sky hello blue. There's nothing can hold me when I hold you. Feels so right it cant be wrong.</div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            {{-- End collapse for programs --}}
        </div>
    </div>
</section>
<div class="bg-white text-center text-dark">
    <div class="container mt-3">
        <h3>Latest activities</h3>
        <div class="row text-dark">
            <div class="col-sm-3 p-3">
                <div class="activity">
                    <div class="card">
                        <div class="card-title">
                            <img src="{{ asset('images/img-test.jpg') }}" alt="" srcset="" class="img-responsive">
                        </div>
                        <div class="card-title text-left">
                            <h5 style="display:inline" class="text-left">BBC Graduation 2019</h5>
                            
                            <p style="float:right;display:inline">March, 12</p>
                        </div>
                        <div class="card-body">
                            <p class="text-left">Quis nulla cillum esse fugiat anim aliquip laborum. Labore qui laborum nostrud est adipisicing amet dolor do excepteur. Tempor qui consequat ea qui laborum reprehenderit. Elit excepteur magna commodo est ullamco ad laboris ex in tempor tempor et id ex.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 p-3">
                <div class="activity">
                    <div class="card">
                        <div class="card-title">
                            <img src="{{ asset('images/img-test.jpg') }}" alt="" srcset="" class="img-responsive">
                        </div>
                        <div class="card-title text-left">
                            <h5 style="display:inline" class="text-left">BBC Graduation 2019</h5>
                            
                            <p style="float:right;display:inline">March, 12</p>
                        </div>
                        <div class="card-body">
                            <p class="text-left">Quis nulla cillum esse fugiat anim aliquip laborum. Labore qui laborum nostrud est adipisicing amet dolor do excepteur. Tempor qui consequat ea qui laborum reprehenderit. Elit excepteur magna commodo est ullamco ad laboris ex in tempor tempor et id ex.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 p-3">
                <div class="activity">
                    <div class="card">
                        <div class="card-title">
                            <img src="{{ asset('images/img-test.jpg') }}" alt="" srcset="" class="img-responsive">
                        </div>
                        <div class="card-title text-left">
                            <h5 style="display:inline" class="text-left">BBC Graduation 2019</h5>
                            
                            <p style="float:right;display:inline">March, 12</p>
                        </div>
                        <div class="card-body">
                            <p class="text-left">Quis nulla cillum esse fugiat anim aliquip laborum. Labore qui laborum nostrud est adipisicing amet dolor do excepteur. Tempor qui consequat ea qui laborum reprehenderit. Elit excepteur magna commodo est ullamco ad laboris ex in tempor tempor et id ex.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 p-3">
                <div class="activity">
                    <div class="card">
                        <div class="card-title">
                            <img src="{{ asset('images/img-test.jpg') }}" alt="" srcset="" class="img-responsive">
                        </div>
                        <div class="card-title text-left">
                            <h5 style="display:inline" class="text-left">BBC Graduation 2019</h5>
                            
                            <p style="float:right;display:inline">March, 12</p>
                        </div>
                        <div class="card-body">
                            <p class="text-left">Quis nulla cillum esse fugiat anim aliquip laborum. Labore qui laborum nostrud est adipisicing amet dolor do excepteur. Tempor qui consequat ea qui laborum reprehenderit. Elit excepteur magna commodo est ullamco ad laboris ex in tempor tempor et id ex.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center text white">
            <a href="#" class="btn btn-primary p-3 mt-3 mb-5" style="border-radius: 10px;">See more +</a>
        </div>
    </div>
</div>
<div class="followers bg-primary">
    <div class="container">
        <div class="row mb-0">
            <div class="col-md-6 mb-0">
                <div class="text-center">
                    <h2>Subscriber on newsLetters</h2>
                    <p>Abonnez-vous pour recevoir les nouvelles de l'institut</p>
                </div>
            </div>
            <div class=" col-md-6">
                <form action="#" class="form vertical-center">
                    <div class="vertical-center text-center input-group" style="width:100%">
                        <input type="text" class="form-control text-center" style="width: 70%" id="validationCustomUsername" placeholder="Your email" aria-describedby="inputGroupPrepend" required>
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
