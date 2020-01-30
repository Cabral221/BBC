<div class="footer bg-danger mb-0">
    <div class="container text-center pt-3">
        <div style="border-bottom: 2px seashell solid">
            <h2>Trust partners</h2>
            <div class="logo-partner mb-5 row">
                @if (isset($partners))
                    @foreach ($partners as $partner)
                        <a href="{{ $partner->link }}" target="_blank"><img src="{{ asset($partner->logo) }}" class="m-2" width="100px" alt="" srcset=""></a>
                    @endforeach
                @else
                    <p>En négociation</p> 
                @endif
                {{-- <img src="{{ asset('images/BTEC.png') }}" class="m-2" alt="" srcset="">
                <img src="{{ asset('images/BTEC.png') }}" class="m-2" alt="" srcset=""> --}}
            </div>
        </div>
        <div class="row pb-3 pt-3 h-100">
            <div class="col-md-6 col-sm-6 ">
                <div class="mb-2 my-auto">
                    <a href="" style="m-2"><i class="fab fa-twitter m-2" style="font-size:30px;color:white;"></i></a>
                    <a href="" style="m-2"><i class="fab fa-youtube m-2" style="font-size:30px;color:white"></i></a>
                    <a href="" style="m-2"><i class="fab fa-linkedin m-2" style="font-size:30px;color:white"></i></a>
                    <a href="" style="m-2"><i class="fab fa-instagram m-2" style="font-size:30px;color:white"></i></a>
                    <a href="" style="m-2"><i class="fab fa-facebook m-2" style="font-size:30px;color:white"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 my-auto p-2">
                <p class="text-center my-auto">
                    &copy; Copyright <a href="{{ route('admin.welcome') }}" style="color: blanchedalmond" target="_blank"b>BBC University</b> </a> 2020 - {{ Date('Y') }} | Design by EMPRO
                </p>
            </div>
        </div>
    </div>
</div>