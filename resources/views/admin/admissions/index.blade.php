@extends('layouts/admin/app')
@section('body')
  <!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 ">Dashboard</h1>
  </div>
  <!-- Row pour ajout des diplome -->
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 text-center justify-content-between">
          <h4 class="m-0 font-weight-bold text-primary">Admissions <span class="small muted">({{ $admission->total() }})</span></h4>
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
                        <th scope="col">Lastname</th>
                        <th scope="col">Firstname</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Faculty</th>
                        <th scope="col">Programs</th>
                        <th scope="col">View</th>
                        <th>Options</th>
                        </tr>
                    </thead>
                    {{$i = ''}}
                    @foreach($admission as $admin)
                    <tbody>
                        <tr class="text-center" style="color:#4e73df">
                            <th scope="row">{{++$i}}</th>
                            <td>{{$admin->lastname}}</td>
                            <td>{{$admin->firstname}}</td>
                            <td>{{$admin->email}}</td>
                            <td>{{$admin->phone}}</td>
                            <td>{{$admin->filiere->libele}}</td>
                            <td>{{$admin->program->libele}}</td>
                            <td><a href="{{route('admin.params.admissions.show',$admin->id)}}"><i class="fas fa-eye"></i></a></td>
                            <td>       
                                <button type="submit" class="mr-3 btn btn-xs mb-1 text-danger" class="" style='border-radius:5%;'  onclick="event.preventDefault();document.querySelector('#form-delete-{{$admin->id}}').submit();"  name="delete" data-toggle="tooltip" title="supprimer"><i class="far fa-trash-alt"></i></button>
                                <form id="form-delete-{{$admin->id}}" action="{{route('admin.params.admissions.destroy',$admin->id)}}" method="post">
                                @csrf
                                @method('delete') 
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                    </table>
                    {{ $admission->links() }}
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- fin du row des ajouts de diplome -->



 <!-- Row pour ajout des diplome -->
 <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 text-center justify-content-between">
          <h4 class="m-0 font-weight-bold text-primary">Admissions Read <span class="small muted">({{ $admins->total() }})</span></h4>
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
                        <th scope="col">Lastname</th>
                        <th scope="col">Firstname</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Faculty</th>
                        <th scope="col">Programs</th>
                        <th>Options</th>
                        </tr>
                    </thead>
                    {{$i = ''}}
                    @foreach($admins as $admin)
                    <tbody>
                        <tr class="text-center">
                            <th scope="row">{{++$i}}</th>
                            <td>{{$admin->lastname}}</td>
                            <td>{{$admin->firstname}}</td>
                            <td>{{$admin->email}}</td>
                            <td>{{$admin->phone}}</td>
                            <td>{{$admin->filiere->libele}}</td>
                            <td>{{$admin->program->libele}}</td>
                            <td>       
                                <button type="submit" class="mr-3 btn btn-xs mb-1 text-danger" class="" style='border-radius:5%;'  onclick="event.preventDefault();document.querySelector('#form-delete-{{$admin->id}}').submit();"  name="delete" data-toggle="tooltip" title="supprimer"><i class="far fa-trash-alt"></i></button>
                                <form id="form-delete-{{$admin->id}}" action="{{route('admin.params.admissions.destroy',$admin->id)}}" method="post">
                                @csrf
                                @method('delete') 
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                    </table>
                    {{ $admins->links() }}
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
