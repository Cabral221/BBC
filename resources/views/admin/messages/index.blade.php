@extends('layouts/admin/app')
@section('body')
  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800 ">Dashboard</h1>
  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>




        @foreach( $sms as $com )
        <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow ">
        <!-- Card Header - Dropdown -->
        <div class="card-header pb-0">
        <div class="row">
          <div class="col-xl-11"><h4 class="text-dark text-capitalize"> {{ $com->name }} </h4></div>
            <div class="col-xl-1">
              <button type="submit" class="mr-3 mb-1 bg-danger" class="" style='border-radius:5%;color:white;border:0px;'  onclick="event.preventDefault();document.querySelector('#form-delete-{{$com->id}}').submit();"  name="delete" data-toggle="tooltip" title="supprimer"><i class="far fa-trash-alt"></i></button>
              <form id="form-delete-{{$com->id}}" action="{{route('admin.blog.messages.destroy',$com->id)}}" method="post">
              @csrf
              @method('delete') 
              </form>
            </div>
          </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
        <p>E-mail : {{ $com->email }}</p>
          <p class="text-italic"> {{ $com->message }} </p>
        </div>
      </div>
    </div>
  </div>
  <!-- fin du row des ajouts de post -->
        @endforeach



</div>
@endsection
