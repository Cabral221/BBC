@extends('layouts.user.app')

@section('text-header')
<!-- Header -->
<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{asset('assets/img/bg/bg2.jpg')}}" data-speed="0.7">
    <div class="section-inner pad-top-200">
        <div class="container vertical-center">
            <div class="intro-text vertical-center text-center smoothie">
                <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s"><h2>View all programs</h2></div>
                <div class="intro-sub-heading wow fadeIn secondary-font" data-wow-delay="0.4s">The first UK university in <span class="rotate">Dakar, Senegal</span></div>
                <a href="{{ route('user.admission') }}" class="btn btn-primary mt-5"><h4>Admission</h4></a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section>
    <div class="section mt-3 mb-3">
        <div class="container text-dark">
            <h3>Title</h3>
            <p class="text-dark">Ex tempor excepteur aute culpa ullamco excepteur ipsum aute tempor nostrud commodo aute. Aute in cupidatat enim deserunt fugiat sit minim. Cillum laborum quis esse fugiat minim esse do eu duis Lorem qui laborum ea laboris. Pariatur sit occaecat cupidatat in eiusmod sit ea pariatur. Deserunt adipisicing quis eiusmod sunt minim mollit. Duis duis laborum occaecat dolore ex incididunt consequat duis tempor veniam fugiat deserunt eu nostrud. Sunt ea ut officia id. Nulla ullamco occaecat quis eu cillum. Officia ullamco ut do velit mollit Lorem id. Eu sint est eu qui aliqua do non id. Commodo incididunt sit consequat nisi reprehenderit veniam quis aliquip officia est et qui. Minim amet eu sunt reprehenderit eu veniam adipisicing proident consequat cupidatat minim deserunt minim esse. Dolor cillum incididunt dolore culpa est culpa ex dolor tempor irure deserunt proident in veniam. Dolor nostrud culpa fugiat cupidatat est.</p>
            
            <div class="row">
                <div class="col-sm-8 text-dark">
                    <div class="row">
                        <h2 class="text-center"># English</h2>
                        <div class="row">
                            <div class="col-sm-12 blog-item mb10 wow match-height">
                                <div class="row">
                                    <a href="#">
                                        <div class="program col-xs-12 pt-3 pb-3 m-3">
                                                <div class="media row">
                                                    <div class="pull col-sm-2 col-lg-2 col-xs-2 text-center vertical-center">
                                                        <img class="img-circle" style="padding:10px;heigth:80px" src="assets/img/widget/widget1.jpg" alt="">
                                                    </div>
                                                    <div class="media-body col-sm-10 col-lg-10 col-xs-10">
                                                        <span class="media-heading"><h5>Panic In London</h5></span>
                                                        <p>Enim exercitation cillum amet voluptate enim commodo laborum. Ullamco excepteur amet deserunt do dolor laborum id ad dolor pariatur ipsum sint.</p>
                                                    </div>
                                                </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 blog-item mb10 wow match-height">
                                <div class="row">
                                    <a href="{{ route('user.programs.show',1) }}">
                                        <div class="program col-xs-12 pt-3 pb-3 m-3">
                                                <div class="media row">
                                                    <div class="pull col-sm-2 col-lg-2 col-xs-2 text-center vertical-center">
                                                        <img class="img-circle" style="padding:10px;heigth:80px" src="assets/img/widget/widget1.jpg" alt="">
                                                    </div>
                                                    <div class="media-body col-sm-10 col-lg-10 col-xs-10">
                                                        <span class="media-heading"><h5>Panic In London</h5></span>
                                                        <p>Enim exercitation cillum amet voluptate enim commodo laborum. Ullamco excepteur amet deserunt do dolor laborum id ad dolor pariatur ipsum sint.</p>
                                                    </div>
                                                </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 blog-item mb10 wow match-height">
                                <div class="row">
                                    <a href="#">
                                        <div class="program col-xs-12 pt-3 pb-3 m-3">
                                                <div class="media row">
                                                    <div class="pull col-sm-2 col-lg-2 col-xs-2 text-center vertical-center">
                                                        <img class="img-circle" style="padding:10px;heigth:80px" src="assets/img/widget/widget1.jpg" alt="">
                                                    </div>
                                                    <div class="media-body col-sm-10 col-lg-10 col-xs-10">
                                                        <span class="media-heading"><h5>Panic In London</h5></span>
                                                        <p>Enim exercitation cillum amet voluptate enim commodo laborum. Ullamco excepteur amet deserunt do dolor laborum id ad dolor pariatur ipsum sint.</p>
                                                    </div>
                                                </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 blog-item mb10 wow match-height">
                                <div class="row">
                                    <a href="#">
                                        <div class="program col-xs-12 pt-3 pb-3 m-3">
                                                <div class="media row">
                                                    <div class="pull col-sm-2 col-lg-2 col-xs-2 text-center vertical-center">
                                                        <img class="img-circle" style="padding:10px;heigth:80px" src="assets/img/widget/widget1.jpg" alt="">
                                                    </div>
                                                    <div class="media-body col-sm-10 col-lg-10 col-xs-10">
                                                        <span class="media-heading"><h5>Panic In London</h5></span>
                                                        <p>Enim exercitation cillum amet voluptate enim commodo laborum. Ullamco excepteur amet deserunt do dolor laborum id ad dolor pariatur ipsum sint.</p>
                                                    </div>
                                                </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 blog-item mb10 wow match-height">
                                <div class="row">
                                    <a href="#">
                                        <div class="program col-xs-12 pt-3 pb-3 m-3">
                                                <div class="media row">
                                                    <div class="pull col-sm-2 col-lg-2 col-xs-2 text-center vertical-center">
                                                        <img class="img-circle" style="padding:10px;heigth:80px" src="assets/img/widget/widget1.jpg" alt="">
                                                    </div>
                                                    <div class="media-body col-sm-10 col-lg-10 col-xs-10">
                                                        <span class="media-heading"><h5>Panic In London</h5></span>
                                                        <p>Enim exercitation cillum amet voluptate enim commodo laborum. Ullamco excepteur amet deserunt do dolor laborum id ad dolor pariatur ipsum sint.</p>
                                                    </div>
                                                </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 blog-item mb10 wow match-height">
                                <div class="row">
                                    <a href="#">
                                        <div class="program col-xs-12 pt-3 pb-3 m-3">
                                                <div class="media row">
                                                    <div class="pull col-sm-2 col-lg-2 col-xs-2 text-center vertical-center">
                                                        <img class="img-circle" style="padding:10px;heigth:80px" src="assets/img/widget/widget1.jpg" alt="">
                                                    </div>
                                                    <div class="media-body col-sm-10 col-lg-10 col-xs-10">
                                                        <span class="media-heading"><h5>Panic In London</h5></span>
                                                        <p>Enim exercitation cillum amet voluptate enim commodo laborum. Ullamco excepteur amet deserunt do dolor laborum id ad dolor pariatur ipsum sint.</p>
                                                    </div>
                                                </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <h2 class="text-center"># French</h2>
                        <div class="row">
                            <div class="col-sm-12 blog-item mb10 wow match-height">
                                <div class="row">
                                    <a href="#">
                                        <div class="program col-xs-12 pt-3 pb-3 m-3">
                                                <div class="media row">
                                                    <div class="pull col-sm-2 col-lg-2 col-xs-2 text-center vertical-center">
                                                        <img class="img-circle" style="padding:10px;heigth:80px" src="assets/img/widget/widget1.jpg" alt="">
                                                    </div>
                                                    <div class="media-body col-sm-10 col-lg-10 col-xs-10">
                                                        <span class="media-heading"><h5>Panic In London</h5></span>
                                                        <p>Enim exercitation cillum amet voluptate enim commodo laborum. Ullamco excepteur amet deserunt do dolor laborum id ad dolor pariatur ipsum sint.</p>
                                                    </div>
                                                </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 blog-item mb10 wow match-height">
                                <div class="row">
                                    <a href="#">
                                        <div class="program col-xs-12 pt-3 pb-3 m-3">
                                                <div class="media row">
                                                    <div class="pull col-sm-2 col-lg-2 col-xs-2 text-center vertical-center">
                                                        <img class="img-circle" style="padding:10px;heigth:80px" src="assets/img/widget/widget1.jpg" alt="">
                                                    </div>
                                                    <div class="media-body col-sm-10 col-lg-10 col-xs-10">
                                                        <span class="media-heading"><h5>Panic In London</h5></span>
                                                        <p>Enim exercitation cillum amet voluptate enim commodo laborum. Ullamco excepteur amet deserunt do dolor laborum id ad dolor pariatur ipsum sint.</p>
                                                    </div>
                                                </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 blog-item mb10 wow match-height">
                                <div class="row">
                                    <a href="#">
                                        <div class="program col-xs-12 pt-3 pb-3 m-3">
                                                <div class="media row">
                                                    <div class="pull col-sm-2 col-lg-2 col-xs-2 text-center vertical-center">
                                                        <img class="img-circle" style="padding:10px;heigth:80px" src="assets/img/widget/widget1.jpg" alt="">
                                                    </div>
                                                    <div class="media-body col-sm-10 col-lg-10 col-xs-10">
                                                        <span class="media-heading"><h5>Panic In London</h5></span>
                                                        <p>Enim exercitation cillum amet voluptate enim commodo laborum. Ullamco excepteur amet deserunt do dolor laborum id ad dolor pariatur ipsum sint.</p>
                                                    </div>
                                                </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 blog-item mb10 wow match-height">
                                <div class="row">
                                    <a href="#">
                                        <div class="program col-xs-12 pt-3 pb-3 m-3">
                                                <div class="media row">
                                                    <div class="pull col-sm-2 col-lg-2 col-xs-2 text-center vertical-center">
                                                        <img class="img-circle" style="padding:10px;heigth:80px" src="assets/img/widget/widget1.jpg" alt="">
                                                    </div>
                                                    <div class="media-body col-sm-10 col-lg-10 col-xs-10">
                                                        <span class="media-heading"><h5>Panic In London</h5></span>
                                                        <p>Enim exercitation cillum amet voluptate enim commodo laborum. Ullamco excepteur amet deserunt do dolor laborum id ad dolor pariatur ipsum sint.</p>
                                                    </div>
                                                </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 blog-item mb10 wow match-height">
                                <div class="row">
                                    <a href="#">
                                        <div class="program col-xs-12 pt-3 pb-3 m-3">
                                                <div class="media row">
                                                    <div class="pull col-sm-2 col-lg-2 col-xs-2 text-center vertical-center">
                                                        <img class="img-circle" style="padding:10px;heigth:80px" src="assets/img/widget/widget1.jpg" alt="">
                                                    </div>
                                                    <div class="media-body col-sm-10 col-lg-10 col-xs-10">
                                                        <span class="media-heading"><h5>Panic In London</h5></span>
                                                        <p>Enim exercitation cillum amet voluptate enim commodo laborum. Ullamco excepteur amet deserunt do dolor laborum id ad dolor pariatur ipsum sint.</p>
                                                    </div>
                                                </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <hr>
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
</section>
@endsection