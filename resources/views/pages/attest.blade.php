@extends('layouts.user.app', ['title' => 'Attest'])

@section('text-header')
<!-- Header -->
<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{asset('assets/img/bg/bg2.jpg')}}" data-speed="0.7">
    <div class="section-inner2 pad-top-200">
        <div class="container vertical-center">
            <div class="intro-text vertical-center text-center smoothie">
                <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s"><h1>Attest of Alumni !</h1></div>
                <div class="intro-sub-heading wow fadeIn secondary-font" data-wow-delay="0.4s">The first UK university in <span class="rotate">Dakar, Senegal</span></div>
                <a href="{{ route('user.admission') }}" class="btn btn-primary mt-5"><h4>Admission</h4></a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<div class="bg-white text-center text-dark">
    <div class="container mt-3">
        <h2>Témoignages</h2>
        <div class="row text-dark">
            
            @if (isset($attests) && $attests->count() > 0)
                @foreach ($attests as $attest)
                <div class="col-sm-3 p-3">
                    <div>
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title text-left pt-3 pb-3">
                                    <h5 style="display:inline" class="text-left">{{ $attest->author }}</h5>
                                </div>
                                <p class="card-text text-left">{!! $attest->attest !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <p class="text-center">Pas de temoignage poure le moment...</p>
            @endif
            
        </div>
        <div class="text-center">
            {{ $attests->links() }}
        </div>
    </div>
</div>

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
@endsection
