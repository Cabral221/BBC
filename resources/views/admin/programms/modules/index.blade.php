@extends('layouts/admin/app')
@section('body')
  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800 ">Dashboard</h1>
</div>


       <!-- Row pour ajout des post -->
       @foreach($fil as $fils)
    <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 text-center justify-content-between">
          <h4 class="m-0 font-weight-bold text-primary">{{$fils->libele}}</h4>
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
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Modules</th>
                        <th scope="col">Level</th>
                        <th>Options</th>
                        </tr>
                    </thead>
                    {{$i = ''}}
                    @foreach($fils->modules as $modules)
                    <tbody>
                        <tr>
                            <th scope="row">{{++$i}}</th> 
                            <td>{{$modules->libele}}</td>
                            <td>{{$modules->niveau->libele}}</td>
                            <td>
                                <button type="button" class="btn btn-success btn-xs mb-1" style='border-radius:5%;'  data-id="{{$modules->id}}" data-libele="{{$modules->libele}}" data-filiere="{{$modules->filiere->libele}}"  data-niveau="{{$modules->niveau->libele}}" data-toggle="modal" data-target="#edit_moduleModal"><i class="far fa-edit"></i></button>
                                <button type="submit" class="mr-3 btn btn-danger btn-xs mb-1" class="" style='border-radius:5%;'  onclick="event.preventDefault();document.querySelector('#form-delete-{{$modules->id}}').submit();"  name="delete" data-toggle="tooltip" title="supprimer"><i class="far fa-trash-alt"></i></button>
                                <form id="form-delete-{{$modules->id}}" action="{{route('admin.programms.modules.destroy',$modules->id)}}" method="post">
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
  @endforeach
  <!-- fin du row des ajouts de post -->

         <!-- modal edition des programss -->
         @foreach($modul as $modules)
                       <div class="modal fade" id="edit_moduleModal" tabindex="-1" role="dialog" aria-labelledby="update_progModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="update_progModalLabel">Edit Module</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{route('admin.programms.modules.update','modules')}}" method="post">
                                        {{method_field('patch')}}
                                       {{@csrf_field()}}
                                            <div class="modal-body">
                                                <input type="hidden" name="module" id="module" value="{{$modules->id}}">
                                                <label for="libele" style="color:beige;" class="text-dark">Wording</label>
                                                <input  id="libele" type="text" class="form-control @error('name') is-invalid @enderror text-center" name="libele" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                @error('libele')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror


                                                <label for="filiere_id"  style="color:beige;" class="text-dark">Faculty</label>
                                                <select name="filiere_id" id="filiere_id" class="form-control @error('name') is-invalid @enderror text-center" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                  @foreach($fil as $fils)
                                                      <option value="{{ $fils->id }}" >{{ $fils->libele }}</option>
                                                  @endforeach
                                                </select>
                                                @error('filiere')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror


                                                <label for="niveau_id" style="color:beige;" class="text-dark">Niveau</label>
                                                <select name="niveau_id" id="niveau_id" class="form-control @error('name') is-invalid @enderror text-center" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                  @foreach($niv as $nivs)
                                                      <option value="{{ $nivs->id }}" >{{ $nivs->libele }}</option>
                                                  @endforeach
                                                </select>
                                                @error('niveau')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror


                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Edit</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                </div>
                    </div>
                    </div>
                    @endforeach
                    <!-- fin du modal d'edition des programms -->
</div>
@endsection
