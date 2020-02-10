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
          <h4 class="m-0 font-weight-bold text-primary">Edit Specialty</h4>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="">
            <div class="container">
                    <div class="">
                    <form action=" {{route('admin.programms.specialites.update',$edit->id)}}" method="POST">
                @csrf
                {{method_field('PUT')}}
                    <div class="row">
                        <div class="form-group col-xl-6 col-lg-6">
                        <label for="tite">Wording</label>
                        <input type="text" class="form-control" name="title" value="{{ $edit->libele }}">
                        </div>

                        <div class="form-group col-xl-6 col-lg-6">
                          <label for="tite">Select Faculty</label>
                          <select name="specialite" id="" class="form-control">
                            <option default></option>
                          @foreach($programms as $prog2)
                            <ul class="list-group">
                            <option disabled> {{ $prog2->libele }} : </option>
                                <li class="list-group-item">
                                  @foreach($prog2->filieres as $file)
                                    <option  value="{{ $file->id }}"> &nbsp&nbsp&nbsp&nbsp -{{ $file->libele }} </option>
                                </li>
                                  @endforeach
                            </ul>
                            @endforeach
                          </select>
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-group col-xl-6 col-lg-6">
                          <button type="submit" class="btn btn-primary btn-block">Edit</button>
                        </div>
                
                    
                        <div class="form-group col-xl-6 col-lg-6">
                        <button type="reset" class="btn btn-success btn-block">Reset</button>
                        </div>

                    </div>
              </form>
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
