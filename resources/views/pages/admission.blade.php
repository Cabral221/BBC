@extends('layouts.user.app')

@section('text-header')
<!-- Header -->
<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{asset('assets/img/bg/bg2.jpg')}}" data-speed="0.7">
    <div class="section-inner pad-top-200">
        <div class="container vertical-center">
            <div class="intro-text vertical-center text-center smoothie">
                <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s"><h2>Tme to learn !</h2></div>
                <div class="intro-sub-heading wow fadeIn secondary-font" data-wow-delay="0.4s">The first UK university in <span class="rotate">Dakar, Senegal</span></div>
                {{-- <h4 href="#" class="btn btn-primary mt-5"><h4>Admission</h4></h4> --}}
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')

<div class="" style="height: 400px;">
    <h1 class="text-center text-dark">Admission Page</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="text-dark">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="type" class="control-label">Program</label>
                            <select class="form-control text-dark" id="type" name="program_id">
                                <option>Canadian</option>
                                <option>English</option>
                                <option>French</option>
                              </select>
                        </div>
                        <div class="form-group">
                            <label for="type" class="control-label text-dark">Diplome</label>
                            <select class="form-control text-dark" id="type" name="diplome_id">
                                <option>Licence</option>
                                <option>Master</option>
                                <option>BBA</option>
                                <option>MBA</option>
                              </select>
                        </div>
                        <div class="form-group">
                            <label for="type" class="control-label text-dark">Diplome</label>
                            <select class="form-control text-dark" id="type" name="diplome_id">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

