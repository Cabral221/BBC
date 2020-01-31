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
<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{ $image->image }}" data-speed="0.7">
    <div class="section-inner pad-top-200">
        <div class="container vertical-center">
            <div class="intro-text vertical-center text-center smoothie">
                <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s"><h2>Time to learn !</h2></div>
                <div class="intro-sub-heading wow fadeIn secondary-font" data-wow-delay="0.4s">The first UK university in <span class="rotate">Dakar, Senegal</span></div>
                {{-- <h4 href="#" class="btn btn-primary mt-5"><h4>Admission</h4></h4> --}}
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<div>
    <div class="container mt-3">
        <div class="row pt-3 pb-3">
            <button type="button" class="collapsible text-center pt-5 pb-5"><h4 style="display:inline">LICENCE</h4></button>
            <div class="content">
                <div class="text-white m-5">
                    <ul>
                        <li class="m-3">Sunt amet occaecat est non incididunt.</li>
                        <li class="m-3">Sunt amet occaecat est non incididunt.</li>
                        <li class="m-3">Sunt amet occaecat est non incididunt.</li>
                        <li class="m-3">Sunt amet occaecat est non incididunt.</li>
                        <li class="m-3">Sunt amet occaecat est non incididunt.</li>
                        <li class="m-3">Sunt amet occaecat est non incididunt.</li>
                    </ul>
                    <div class="row text-center">
                        <button type="button" class="btn btn-primary p-5">Brochure</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <div class="container mt-3">
        <div class="row pt-3 pb-3">
            <button type="button" class="collapsible text-center pt-5 pb-5"><h4 style="display:inline">MASTER</h4></button>
            <div class="content mb-3">
                <div class="text-white m-5">
                    <ul>
                        <li class="m-3">Sunt amet occaecat est non incididunt.</li>
                        <li class="m-3">Sunt amet occaecat est non incididunt.</li>
                        <li class="m-3">Sunt amet occaecat est non incididunt.</li>
                        <li class="m-3">Sunt amet occaecat est non incididunt.</li>
                        <li class="m-3">Sunt amet occaecat est non incididunt.</li>
                        <li class="m-3">Sunt amet occaecat est non incididunt.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="">
    <h1 class="text-center text-dark">Admission Page</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="text-dark">
                    <form action="" method="post" class="form from-admission" id="form-admission">
                        <div class="form-group mb-4">
                            <div class="select-style">
                                <select class="form-control" id="program" name="program_id">
                                    <option><h1>Canadian</h1></option>
                                    <option>English</option>
                                    <option>French</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="select-style">
                                <select class="form-control" id="diplome" name="diplome_id">
                                    <option>Licence</option>
                                    <option>Master</option>
                                    <option>BBA</option>
                                    <option>MBA</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="select-style">
                                <select class="form-control" id="niveau" name="niveau">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="col-sm-6 pl-0">
                                <div class="form-group">
                                    <label for="name" class="control-label sr-only" sr-only>First Name</label>
                                    <input type="text" placeholder="First name *" class="input-admission" name="name" id="name">
                                </div>
                            </div>
                            <div class="col-sm-6  pr-0">
                                <div class="form-group">
                                    <label for="email" class="control-label sr-only">Last Name</label>
                                    <input type="email" placeholder="Last name *" class="input-admission" name="email" id="email">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-6 pl-0">
                                <div class="form-group">
                                    <label for="name" class="control-label sr-only">Email</label>
                                    <input type="text" placeholder="Email *" class="input-admission" name="name" id="name">
                                </div>
                            </div>
                            <div class="col-sm-6 pr-0">
                                <div class="form-group">
                                    <label for="phone" class="control-label sr-only">Phone</label>
                                    <input type="number" placeholder="Phone *" class="input-admission" name="phone" id="phone">
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-block btn-danger p-4"><b>SOUMMETRE</b></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    Quelques choses a mettre
</div>

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

