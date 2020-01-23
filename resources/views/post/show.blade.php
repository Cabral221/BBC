@extends('layouts.user.app')

@section('text-header')
<!-- Header -->
<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{asset('assets/img/bg/bg2.jpg')}}" data-speed="0.7">
    <div class="section-inner pad-top-200">
        <div class="container vertical-center">
            <div class="intro-text vertical-center text-center smoothie">
                <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s"><h2>BBC Blog</h2></div>
                <div class="intro-sub-heading wow fadeIn secondary-font" data-wow-delay="0.4s">The first UK university in <span class="rotate">Dakar, Senegal</span></div>
                <a href="{{ route('user.admission') }}" class="btn btn-primary mt-5"><h4>Admission</h4></a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')

<div class="section row">
    <div class="container text-dark pt-5 pb-5">
        <div class="row">
            <div class="col-sm-8">
                <div class="col-sm-4">
                    <img src="{{ asset('images/img-test.jpg') }}" class="img-responsive" alt="" srcset="">
                </div>
                <div class="div col-sm-8">
                    <h3>Titre</h3>
                    <p class="muted"><small>posted at January 21, 2020</small></p>
                </div>
                <div class="row">
                    <p>
                       <p> Amet enim labore occaecat nulla dolore magna labore mollit ex. Dolore anim ea non nostrud do aliquip ut aliqua commodo nostrud dolor est exercitation. Amet adipisicing dolor mollit exercitation. Id adipisicing proident sunt ut laborum. Nostrud nisi id cupidatat consequat elit ullamco culpa reprehenderit tempor elit. Officia aute occaecat nisi eiusmod anim quis dolor veniam et et. Sunt laborum esse occaecat tempor dolore dolor enim occaecat amet sit occaecat.</p>
                        
                       <p> Deserunt proident proident laboris eiusmod anim elit. Ex quis commodo esse irure adipisicing exercitation id velit proident nisi elit minim. Mollit minim fugiat dolor voluptate quis magna magna. Duis veniam voluptate nisi do id labore ullamco commodo ullamco labore tempor exercitation. Cillum dolore consectetur ipsum qui veniam nisi elit voluptate cillum adipisicing nulla.</p>
                        
                       <p> Cillum occaecat exercitation esse pariatur nostrud ipsum magna do aliqua velit ut ullamco. Ipsum esse pariatur do velit. Commodo aliquip deserunt fugiat dolore nisi exercitation excepteur. Et aute Lorem laboris sit duis mollit cillum irure est laboris dolore quis sint velit. Ullamco nostrud laborum velit reprehenderit qui minim ea incididunt ut id. Cupidatat ipsum incididunt exercitation aute nostrud ad adipisicing Lorem deserunt duis ad nisi. Officia mollit magna dolor minim.</p> 
                        
                       <p> Adipisicing deserunt consectetur est est. Laborum proident labore tempor laboris deserunt aliqua. Excepteur laboris deserunt commodo dolor commodo ad ut enim reprehenderit ipsum veniam ullamco dolor consectetur. Lorem cupidatat non cupidatat duis duis cillum aliquip non.</p>
                        
                       <p> Excepteur id duis sit tempor ut ad incididunt et elit amet deserunt. Voluptate ut id nulla anim voluptate pariatur sit consequat deserunt eiusmod ullamco fugiat velit exercitation. Dolor id excepteur consequat excepteur ipsum irure commodo nostrud exercitation. Deserunt ea nisi esse sint labore. Esse eiusmod incididunt adipisicing reprehenderit adipisicing dolore non est voluptate irure do cillum eu. In quis quis et est ullamco adipisicing aliqua id. Adipisicing irure deserunt ullamco excepteur.</p>
                        
                       <p> Ut pariatur aute enim velit cillum magna deserunt culpa ad ipsum. Irure id elit incididunt id duis. Ea laboris sunt cupidatat do tempor ex consequat exercitation id laborum. Voluptate cillum et id nulla laborum veniam velit id. Minim laboris esse minim eiusmod voluptate dolore mollit irure voluptate aliqua amet. Consectetur fugiat aliquip non amet laborum. Occaecat quis duis nostrud ipsum nisi consectetur ullamco aliquip labore irure consequat.</p>
                        
                       <p> Anim Lorem mollit sit ex Lorem cillum eu cillum in cupidatat eu eu duis exercitation. Enim ea exercitation tempor quis consectetur officia cillum commodo occaecat velit adipisicing. Proident culpa et adipisicing exercitation reprehenderit consequat consequat amet tempor Lorem fugiat cillum sunt do. Qui elit cupidatat cillum irure duis quis. Dolore nisi tempor consequat amet occaecat occaecat quis Lorem. Aliqua Lorem excepteur laboris id laboris.</p>
                        
                       <p> Est adipisicing veniam consectetur culpa adipisicing esse nostrud ad ea est do eiusmod ullamco non. Ad anim est eu voluptate ea fugiat. In minim veniam labore amet. Sint aliquip ullamco ipsum exercitation quis. Anim enim labore est occaecat eiusmod anim ea laboris consequat ut.</p>
                    </p>
                </div>
                <div class="row">
                    <div id="comments-list" class="col-sm-10 col-sm-offset-1 gap wow">
                        <div class="mt60 mb50 single-section-title">
                            <h3>3 Comments</h3>
                        </div>
                        <div class="media">
                            <div class="media-body mb-2" style="padding-left: 10px;border-left: 4px solid black">
                                <div class="well mb-0">
                                    <div class="media-heading">
                                        <span class="heading-font">Dave Evans</span>&nbsp; <small class="secondary-font">30th Jan, 2015</small>
                                    </div>
                                    <p>Was are delightful solicitude discovered collecting man day. Resolving neglected sir tolerably but existence conveying for. Day his put off unaffected literature partiality inhabiting.</p>
                                    
                                </div>
                                <!--/.media-->
                            </div>
                        </div>
                        <!--/.media-->
                        <div class="media">
                            <div class="media-body mb-2" style="padding-left: 10px;border-left: 4px solid black">
                                <div class="well mb-0">
                                    <div class="media-heading">
                                        <span class="heading-font">Dave Evans</span>&nbsp; <small class="secondary-font">30th Jan, 2015</small>
                                    </div>
                                    <p>Was are delightful solicitude discovered collecting man day. Resolving neglected sir tolerably but existence conveying for. Day his put off unaffected literature partiality inhabiting.</p>
                                    
                                </div>
                                <!--/.media-->
                            </div>
                        </div>
                        <!--/.media-->
                        <div class="media">
                            <div class="media-body mb-2" style="padding-left: 10px;border-left: 4px solid black">
                                <div class="well mb-0">
                                    <div class="media-heading">
                                        <span class="heading-font">Dave Evans</span>&nbsp; <small class="secondary-font">30th Jan, 2015</small>
                                    </div>
                                    <p>Was are delightful solicitude discovered collecting man day. Resolving neglected sir tolerably but existence conveying for. Day his put off unaffected literature partiality inhabiting.</p>
                                    
                                </div>
                            </div>
                        </div>
                        <!--/.media-->

                        <div id="comments-form" class="row wow">
                            <div class="col-md-12">
                                <div class="mt60 mb50 single-section-title">
                                    <h3>Leave A Repl</h3>
                                </div>
                                <div id=""></div>
                                <form method="post" id="" class="comment-form pt-3 pb-3">
                                    <div class="row">
                                        <input type="text" style="border-bottom: 3px solid black;" class="form-control col-md-4 text-dark" name="name1" placeholder="Your Name *" id="name1" required data-validation-required-message="Please enter your name." />
                                        <input type="email" style="border-bottom: 3px solid black;" class="form-control col-md-4 text-dark" name="email1" placeholder="Your Email *" id="email1" required data-validation-required-message="Please enter your email address." />
                                    </div>
                                    <textarea name="comments1" class="form-control text-dark" rows="5" style="background-color: transparent;" id="" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                                    <button class="btn btn-primary pull-right mt-3 p-4 btn-bg-primary" type="submit">Reply</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="post-sidebar" class="col-sm-3 col-sm-offset-1">
                <div class="widget mb50">
                    <div>
                        <img src="{{asset('assets/img/news/1.jpg')}}" class="img-responsive" alt="" srcset="">
                        <h4>Dr Doe John </h4>
                        <h6>Director of programs</h6>
                    </div>
                    <hr>
                    <div>
                        <h4 class="">Latest Articles</h4>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="assets/img/widget/widget1.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Panic In London</a></span>
                                <small class="muted">Posted 14 April 2019</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="assets/img/widget/widget2.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">New iPhone News</a></span>
                                <small class="muted">Posted 14 April 2019</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="assets/img/widget/widget3.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Our Year In Review</a></span>
                                <small class="muted">Posted 14 April 2019</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="assets/img/widget/widget4.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">jQuery Tutorial</a></span>
                                <small class="muted">Posted 14 April 2019</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="assets/img/widget/widget5.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Sheen Interview</a></span>
                                <small class="muted">Posted 14 April 2019</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection

