@extends('layouts/admin/app')
@section('body')
  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800 ">Dashboard</h1>
</div>

<!-- Content Row -->

    <!-- Row pour ajout des diplome -->
    <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 text-center justify-content-between">
          <h4 class="m-0 font-weight-bold text-primary">All Specialty</h4>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="">
            <div class="container">
                    <div class="">
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Wording</th>
                        <th scope="col">Faculty</th>
                        <th scope="col">Options</th>
                        </tr>
                    </thead>
                    {{$i = ''}}
                    @foreach($af as $dip)
                    <tbody>
                        <tr class="text-center">
                            <th scope="row">{{++$i}}</th>
                            <td>{{$dip->libele}}</td>
                            <td>{{$dip->filiere->libele}}</td>
                            <td>
                               <a href="{{ route('admin.programms.specialites.edit',$dip->id) }}" class="btn btn-success btn-xs mb-1" style='border-radius:5%;' ><i class="far fa-edit"></i></a>
                                <button type="submit" class="mr-3 btn btn-danger btn-xs mb-1" class="" style='border-radius:5%;'  onclick="event.preventDefault();document.querySelector('#form-delete-{{$dip->id}}').submit();"  name="delete" data-toggle="tooltip" title="supprimer"><i class="far fa-trash-alt"></i></button>
                                <form id="form-delete-{{$dip->id}}" action="{{route('admin.programms.specialites.destroy',$dip->id)}}" method="post">
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
  <!-- fin du row des ajouts de diplome -->



</div>
@endsection
