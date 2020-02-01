@extends('layouts.user.app')

@section('text-header')
<!-- Header -->
<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{asset('assets/img/bg/bg2.jpg')}}" data-speed="0.7">
    <div class="section-inner pad-top-200">
        <div class="container vertical-center">
            <div class="intro-text vertical-center text-center smoothie">
<<<<<<< HEAD
                <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s"><h2>Business</h2></div>
=======
                <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s"><h2> {{$filiere->program->libele}}  Program</h2></div>
>>>>>>> 44c8856871d282fb03d8a4e0f03d92da647038bf
                <div class="intro-sub-heading wow fadeIn secondary-font" data-wow-delay="0.4s">The first UK university in <span class="rotate">Dakar, Senegal</span></div>
                <a href="{{ route('user.admission') }}" class="btn btn-primary mt-5"><h4>Admission</h4></a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section class="pt-5 pb-5">
    <div class="row">
        <div class="container text-dark">
            <div class="col-sm-8">
                <div class="bg-blue p-5">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
<<<<<<< HEAD
                            <img src="{{ asset('images/mba.png') }}" class="img-responsive img-circle" style="bg-white" alt="" srcset="">
                        </div>
                        <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9">
                            <h3>Business</h3>
                            <p>Laborum dolore enim id proident proident est ut nisi fugiat ex mollit sit irure. Irure laborum ex nostrud labore voluptate aute culpa non irure. Eiusmod reprehenderit aliquip ea dolor consectetur dolore non incididunt velit laboris exercitation nostrud. Elit reprehenderit tempor dolore excepteur non magna ea veniam Lorem deserunt occaecat non laborum dolor.</p>
                        </div>
                    </div>
                    <div class="row">
                        <p><strong>Ut do fugiat esse exercitation.</strong></p>
                        <ul>
                            <li>Amet qui nostrud exercitation adipisicing eu laboris adipisicing ex excepteur voluptate minim anim irure ipsum.</li>
                            <li>Amet qui nostrud exercitation adipisicing eu laboris adipisicing ex excepteur voluptate minim anim irure ipsum.</li>
                            <li>Amet qui nostrud exercitation adipisicing eu laboris adipisicing ex excepteur voluptate minim anim irure ipsum.</li>
                        </ul>
                    </div>
=======
                            <img src="{{ asset($filiere->icon) }}" class="img-responsive img-circle" style="bg-white" alt="" srcset="">
                        </div>
                        <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9">
                            <h3>{{ $filiere->program->libele . ' : ' .$filiere->libele }}</h3>
                            <ul>
                                <li>{{ $filiere->describe }}</li>
                            </ul>
                        </div>
                    </div>
>>>>>>> 44c8856871d282fb03d8a4e0f03d92da647038bf
                </div>
            </div>
            <div class="col-sm-4">
                <div class="text-center">
                    <img src="{{ asset('images/image1.png') }}" alt="" srcset="">
                    <div class="text">
                        <h2>Mr Doe John</h2>
                        <h5>Director des programs</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="row">
        <div class="container text-dark">
<<<<<<< HEAD
            <h2 class="text-center p-5">Culpa deserunt ut aliqua aliquip</h2>
=======
            <h2 class="text-center p-5">Degrees : @foreach ($filiere->program->diplomes as $diplome)
                {{ $diplome->libele }} / 
            @endforeach</h2>
>>>>>>> 44c8856871d282fb03d8a4e0f03d92da647038bf
            <div>
                <table class=table style="border-left: none;">
                    <tr>
                        <td style="width:30%" class="vertical-center"><h3>Course Duration</h3></td>
<<<<<<< HEAD
                        <td>Laboris consequat velit ad deserunt id adipisicing. Cupidatat amet velit non in.</td>
                    </tr>
                    <tr>
                        <td class="vertical-center"><h3>Course entry requirement</h3></td>
                        <td>Laboris consequat velit ad deserunt id adipisicing. Cupidatat amet velit non in. Aute voluptate culpa aliquip reprehenderit cupidatat ipsum labore consectetur ea proident aliquip anim qui. Velit reprehenderit voluptate consectetur qui aute. Tempor dolor quis deserunt qui enim anim cupidatat incididunt pariatur minim magna. Laborum nulla officia id sunt deserunt sunt sint esse.</td>
                    </tr>
                    <tr>
                        <td class="vertical-center"><h3>Course Learning Outcome</h3></td>
                        <td>Laboris consequat velit ad deserunt id adipisicing. Cupidatat amet velit non in. Aute voluptate culpa aliquip reprehenderit cupidatat ipsum labore consectetur ea proident aliquip anim qui. Velit reprehenderit voluptate consectetur qui aute. Tempor dolor quis deserunt qui enim anim cupidatat incididunt pariatur minim magna. Laborum nulla officia id sunt deserunt sunt sint esse.</td>
                    </tr>
                    <tr>
                        <td class="vertical-center"><h3>Modules</h3></td>
                        <td>
                            <div class="row">

                                <div class="col-sm-4">
                                    <h4>Licence 1</h4>
                                    <ul>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum Dolores</li>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum Dolores</li>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum Dolores</li>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum Dolores</li>
                                    </ul>
                                </div>
                                
                                <div class="col-sm-4">
                                    <h4>Licence 2</h4>
                                    <ul>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum Dolores</li>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum Dolores</li>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum Dolores</li>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum Dolores</li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <h4>Licence 3</h4>
                                    <ul>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum Dolores</li>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum Dolores</li>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum Dolores</li>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum Dolores</li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <h4>Master 1</h4>
                                    <ul>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum Dolores</li>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum Dolores</li>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum Dolores</li>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum Dolores</li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <h4>Master 2</h4>
                                    <ul>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum Dolores</li>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum Dolores</li>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum Dolores</li>
                                        <li>Lorem Ipsum</li>
                                        <li>Lorem Ipsum Dolores</li>
                                    </ul>
                                </div>
                            </div>
=======
                        <td>{{ $filiere->duration }}</td>
                    </tr>
                    <tr>
                        <td class="vertical-center"><h3>Course entry requirement</h3></td>
                        <td>{{ $filiere->requirement }}</td>
                    </tr>
                    <tr>
                        <td class="vertical-center"><h3>Course Learning Outcome</h3></td>
                        <td>{{ $filiere->outCome }}</td>
                    </tr>
                    <tr>
                        <td class="vertical-center"><h3>Modules</h3></td>
                        <td>        
                            <ul>
                                @if ($filiere->mudules != null)
                                    @foreach ($filiere->modules as $module)
                                        <li>{{ $module->lebele }}</li>
                                    @endforeach
                                @else
                                    <p>Aucun module pour ce filiere...</p>
                                @endif
                            </ul>
>>>>>>> 44c8856871d282fb03d8a4e0f03d92da647038bf
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
    <div class="row bg-primary">
        <div class="container">
            <h2 class="text-center">Specialization</h2>
            <div class="btn btn-danger">Geni logiciel</div>
            <table class="table">
                <tr>
                    <th>
                        <td>Finance</td>
                        <td>Marketing</td>
                        <td>Manegment</td>
                        <td>Human Resource Managment</td>
                    </th>
                </tr>
            </table>
        </div>
    </div>
@endsection