@extends('layouts/admin/app')
@section('body')
<!-- <script>
  tinymce.init({
    selector:'textarea.description',
    width: 570,
    height: 200
  });
</script>  -->
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
          <h4 class="m-0 font-weight-bold text-primary">Add Programms</h4>
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
              <form action="{{ route( 'admin.programms.programms.store' ) }}" method="POST">
                @csrf
                <!-- {{method_field('PUT')}} -->
                    <div class="row">
                        <div class="form-group col-xl-9 col-lg-9">
                        <input type="hidden" name="prog" id="prog_id">
                        <label for="libele">Libellet</label>
                        <input type="text" class="form-control" id="libele" name="libele" value="">
                        </div>
                
                    
                        <div class="form-group col-xl-3 col-lg-3">
                        <label for="">&nbsp</label>
                          <button class="btn btn-primary btn-block">Add</button>
                        </div>

                    </div>
              </form>
                    <div class="">
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Libelle</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Trash</th>
                        </tr>
                    </thead>
                    {{$i = ''}}
                    @foreach($programms as $prog)
                    <tbody>
                        <tr>
                            <th scope="row">{{++$i}}</th>
                            <td>{{$prog->libele}}</td>
                            <td><button type="button" class="btn btn-success btn-xs mb-1" style='border-radius:5%;'  data-id="{{$prog->id}}" data-libele="{{$prog->libele}}"  data-toggle="modal" data-target="#edit_progModal"><i class="far fa-edit"></i></button></td>
                            <td>
                                <button type="submit" class="mr-3 btn btn-danger btn-xs mb-1" class="" style='border-radius:5%;'  onclick="event.preventDefault();document.querySelector('#form-delete-{{$prog->id}}').submit();"  name="delete" data-toggle="tooltip" title="supprimer"><i class="far fa-trash-alt"></i></button>
                                <form id="form-delete-{{$prog->id}}" action="{{route('admin.programms.programms.destroy',$prog->id)}}" method="post">
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
  
  <!-- row de l'affichage des post -->
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 text-center justify-content-between">
          <h4 class="m-0 font-weight-bold text-primary ">Add Filliere</h4>
        </div>
        <!-- Card Body -->
        <div class="card-body">
        <form action=" {{route('admin.programms.filliers.store')}} " method="POST" enctype="multipart/form-data">
                @csrf
                <!-- {{method_field('PUT')}} -->

                <div class="row">

                <div class="form-group col-xl-6 col-lg-6">
                    <label for="tite">Programms Group</label>
                    <select name="program_id" id="" class="form-control">
                    @foreach($programms as $prog)
                      <option value="{{ $prog->id }}">{{ $prog->libele }}</option>
                    @endforeach
                    </select>
                    </div>
                    
                    <div class="form-group col-xl-6 col-lg-6">
                    <label for="icon">Icone</label>
                    <input type="file" name="icon" class="form-control" id="icon" value="">
                    </div>

                </div>

                    <div class="row">
                        <div class="form-group col-xl-6 col-lg-6">
                        <label for="diplome">Libellet</label>
                        <input type="text" class="form-control" name="libele" value="">
                        </div>
                
                    
                        <div class="form-group col-xl-6 col-lg-6">
                        <label for="diplome">Diplome</label>
                        <input type="text" class="form-control" name="diplome" value="">
                        </div>

                    </div>

                   

                    <div class="row">
                        <div class="form-group col-xl-6 col-lg-6">
                        <label for="outCome">Outcome</label>
                        <textarea name="outCome" id="editor2" class="form-control" cols="30" rows="6"></textarea>
                        </div>
                
                    
                        <div class="form-group col-xl-6 col-lg-6">
                        <label for="duration">Duration</label>
                        <textarea name="duration" id="editor2" class="form-control" cols="30" rows="6"></textarea>
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-group col-xl-6 col-lg-6">
                        <label for="describe">Describe</label>
                        <textarea name="describe" id="editor2" class="form-control" cols="30" rows="6"></textarea>
                        </div>
                
                    
                        <div class="form-group col-xl-6 col-lg-6">
                        <label for="requirement">Requirement</label>
                        <textarea name="requirement" id="editor2" class="form-control" cols="30" rows="6"></textarea>
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-group col-xl-6 col-lg-6">
                          <button type="submit" class="btn btn-primary btn-block">Add</button>
                        </div>
                
                    
                        <div class="form-group col-xl-6 col-lg-6">
                        <button type="reset" class="btn btn-success btn-block">Reinitialiser</button>
                        </div>

                    </div>

              </form>
        </div>
      </div>
    </div>
  </div>
  <!-- fin du row d'affichage des post -->
  
  

           <!-- Row pour ajout des post -->
    <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 text-center justify-content-between">
          <h4 class="m-0 font-weight-bold text-primary">Add Modules</h4>
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
              <form action="" method="POST">
                @csrf
                <!-- {{method_field('PUT')}} -->
                    <div class="row">
                        <div class="form-group col-xl-6 col-lg-6">
                        <label for="tite">Libellet</label>
                        <input type="text" class="form-control" name="title" value="">
                        </div>

                        <div class="form-group col-xl-6 col-lg-6">
                          <label for="tite">Fillieres Group</label>
                          <select name="programm_id" id="" class="form-control">
                            <option value="id">id</option>
                          </select>
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-group col-xl-6 col-lg-6">
                          <button type="submit" class="btn btn-primary btn-block">Add</button>
                        </div>
                
                    
                        <div class="form-group col-xl-6 col-lg-6">
                        <button type="reset" class="btn btn-success btn-block">Reinitialiser</button>
                        </div>

                    </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- fin du row des ajouts de post -->
  
  <!-- Content Row -->

  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 text-center justify-content-between">
          <h4 class="m-0 font-weight-bold text-primary">Add Specialites</h4>
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
              <form action="" method="POST">
                @csrf
                <!-- {{method_field('PUT')}} -->
                    <div class="row">
                        <div class="form-group col-xl-6 col-lg-6">
                        <label for="tite">Libellet</label>
                        <input type="text" class="form-control" name="title" value="">
                        </div>

                        <div class="form-group col-xl-6 col-lg-6">
                          <label for="tite">Fillieres Group</label>
                          <select name="programm_id" id="" class="form-control">
                            <option value="id">id</option>
                          </select>
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-group col-xl-6 col-lg-6">
                          <button type="submit" class="btn btn-primary btn-block">Add</button>
                        </div>
                
                    
                        <div class="form-group col-xl-6 col-lg-6">
                        <button type="reset" class="btn btn-success btn-block">Reinitialiser</button>
                        </div>

                    </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- fin du row des ajouts de post -->


  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 text-center justify-content-between">
          <h4 class="m-0 font-weight-bold text-primary">Add Unites</h4>
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
              <form action="" method="POST">
                @csrf
                <!-- {{method_field('PUT')}} -->
                    <div class="row">
                        <div class="form-group col-xl-4 col-lg-4">
                        <label for="tite">Libellet</label>
                        <input type="text" class="form-control" name="title" value="">
                        </div>

                        <div class="form-group col-xl-4 col-lg-4">
                        <label for="tite">Numbers</label>
                        <input type="number" class="form-control" name="title" value="">
                        </div>

                        <div class="form-group col-xl-4 col-lg-4">
                          <label for="tite">Specialites Group</label>
                          <select name="programm_id" id="" class="form-control">
                            <option value="id">id</option>
                          </select>
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-group col-xl-6 col-lg-6">
                          <button type="submit" class="btn btn-primary btn-block">Add</button>
                        </div>
                
                    
                        <div class="form-group col-xl-6 col-lg-6">
                        <button type="reset" class="btn btn-success btn-block">Reinitialiser</button>
                        </div>

                    </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- fin du row des ajouts de post -->


             <!-- modal edition des programss -->
             @foreach($programms as $programms)
                       <div class="modal fade" id="edit_progModal" tabindex="-1" role="dialog" aria-labelledby="update_progModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="update_progModalLabel">Modifier vos programms</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{route('admin.programms.programms.update','programms')}}" method="post">
                                        {{method_field('patch')}}
                                       {{@csrf_field()}}
                                            <div class="modal-body">
                                                <input type="hidden" name="prog" id="prog_id" value="{{$programms->id}}">
                                                <label for="libele" style="color:beige;" class="text-dark">{{ __('Libele') }}</label>
                                                <input  id="libele" type="text" class="form-control @error('name') is-invalid @enderror text-center" name="libele" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                @error('logo')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Update</button>
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

@section('js')
<!-- <script src="{{ asset('/tinymce/jquery.tinymce.min.js')}}"></script>
<script src="{{ asset('/tinymce/tinymce.min.js')}}"></script>
<script src="{{ asset('/js/admin/editor.js')}}"></script>
<script src="{{ asset('/js/admin/editor2.js')}}"></script> -->
@endsection