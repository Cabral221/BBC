@extends('layouts/admin/app')
@section('body')
  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800 ">Dashboard</h1>
</div>

<div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-4 col-md-6 mb-4">
 
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-4 col-md-6 mb-4" >
  <div class="card border-left-success shadow h-100 py-2">
    <div class="card-body" style="padding-bottom:0px;padding-top:0px;">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Newsleter</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800"><h1>{{ count($network) }}</h1></div>
        </div>
        <div class="col-auto">
          <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
          <i class="far fa-envelope fa-5 text-gray-300"></i>

        </div>
      </div>
    </div>
  </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-4 col-md-6 mb-4">
  
</div>


</div>

<!-- Content Row -->
<div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Newsleter</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <table class="table table-striped table responsive table-default">
              <thead>
                <tr>
                <th>No</th>
                  <th scope="col">E-mail</th>
                </tr>
                {{ $i = '' }}
              </thead>
              @foreach($network as $net)
              <tbody>
                <tr>
                <th>{{ ++$i }}</th>
                  <td>{{$net->email}}</td>
                  <td>
                  <button type="submit" class="mr-3 btn btn-danger btn-xs"  onclick="event.preventDefault();document.querySelector('#form-delete-{{$net->id}}').submit();"  name="delete" data-toggle="tooltip" title="supprimer"><i class="fas fa-trash-alt"></i></button>
                  <form id="form-delete-{{$net->id}}" action="{{route('admin.members.networks.destroy',$net->id)}}" method="post">
                        @csrf
                        @method('delete') 
                        </form>
                  </td>
                </tr>
              </tbody>
              @endforeach
            </table>
        </div>
      </div>
    </div>
  </div>


</div>
@endsection
