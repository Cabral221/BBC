@extends('layouts/admin/app')
@section('body')
  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800 ">Dashboard</h1>
  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

    <!-- Row pour ajout des post -->
    <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 text-center justify-content-between">
          <h4 class="m-0 font-weight-bold text-primary">All Programms</h4>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="">
            <div class="container">
              @if (session('success'))
              <div class="alert alert-success">
                {{ session('success')}}
              </div>
              @endif
                    <div class="">
                    <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Programs</th>
                        <th scope="col">Libelle</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Options</th>
                        </tr>
                    </thead>
                    {{$i = ''}}
                    @foreach($fillier as $filiere)
                    <tbody>
                        <tr>
                            <th scope="row">{{++$i}}</th>
                            <td>{{$filiere->program->libele}}</td>
                            <td>{{$filiere->libele}}</td>
                            <td><img src="{{ asset($filiere->icon) }}" style="width:30px;height:30px;" alt="" srcset=""></td>
                            <td>
                                <button type="button" class="btn btn-success btn-xs mb-1" style='border-radius:5%;'  data-id="{{$filiere->id}}" data-libele="{{$filiere->libele}}"  data-toggle="modal" data-target="#edit_progModal" title="View"><i class="fas fa-street-view"></i></button>
                                <button type="button" class="btn btn-success btn-xs mb-1" style='border-radius:5%;'  data-id="{{$filiere->id}}" data-libele="{{$filiere->libele}}"  data-toggle="modal" data-target="#edit_progModal" title="Edit"><i class="far fa-edit"></i></button>
                                <button type="submit" class="mr-3 btn btn-danger btn-xs mb-1" class="" style='border-radius:5%;'  onclick="event.preventDefault();document.querySelector('#form-delete-{{$filiere->id}}').submit();"  title="Delete" name="delete" data-toggle="tooltip" title="supprimer"><i class="far fa-trash-alt"></i></button>
                                <form id="form-delete-{{$filiere->id}}" action="{{route('admin.programms.filliers.destroy',$filiere->id)}}" method="post">
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
    </div>
  </div>
  <!-- fin du row des ajouts de post -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati quam quasi facere quia ad aliquid, omnis ducimus consequuntur ab minima quas, sed iure atque nesciunt corporis distinctio repellendus laudantium eius.
    </div>
  </div>
</div>

</div>
@endsection
