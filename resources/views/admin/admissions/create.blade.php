@extends('layouts/admin/app')
@section('body')
  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800 ">Dashboard</h1>
</div>


        
        <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow ">
        <!-- Card Header - Dropdown -->
        <div class="card-header pb-0">
        <h4 class="text-dark text-capitalize"> Study the request </h4>
       </div>
        <!-- Card Body -->
        <div class="card-body">

            <div class="container">
                <p>  <span> Firstname </span>  :    <span> {{ $view->firstname }}</span> </p>
                <p>  <span> Lastname </span>  :     <span> {{ $view->lastname }} </span> </p>
                <p>  <span> E-mail </span>  :       <span> {{ $view->email }} </span> </p>
                <p>  <span> Phone </span>  :        <span> {{ $view->phone }} </span> </p>
                <p>  <span> Faculty </span>  :      <span> {{ $view->filiere->libele }} </span> </p>
                <p>  <span> Program </span>  :      <span> {{ $view->program->libele }} </span> </p>
                {{-- <p>  <span> Level </span>  :        <span> </span> {{ $view->niveau->libele }} </p> --}}
                
            </div>
      
    </div>
    </div>
    </div>
    </div>



</div>
@endsection
