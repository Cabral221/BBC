@extends('layouts/admin/app2')
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
  </div>
  
    <!-- Row pour ajout des post -->
    <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 text-center justify-content-between">
          <h4 class="m-0 font-weight-bold text-primary">Add Programs</h4>
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
                <!-- {{method_field('POST')}} -->
                    <div class="row">
                        <div class="form-group col-xl-9 col-lg-9">
                        <input type="hidden" name="prog" id="prog_id">
                        <label for="libele">Wording</label>
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
                        <th scope="col">Wording</th>
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
  


    <!-- Row pour ajout des niveau -->
    <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 text-center justify-content-between">
          <h4 class="m-0 font-weight-bold text-primary">Add Level</h4>
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
              <form action="{{ route( 'admin.programms.niveaux.store' ) }}" method="POST">
                @csrf
                    <div class="row">
                        <div class="form-group col-xl-4 col-lg-4">
                        <label for="libele">Wording</label>
                        <input type="text" class="form-control" id="libele" name="libele" value="">
                        </div>

                        <div class="form-group col-xl-6 col-lg-6">
                        <label for="prog_niv">Programs</label>
                        <select name="prog_niv" class="form-control">
                          <option value="">Select a program...</option>
                          @foreach($programms as $prog)
                            <option value="{{ $prog->id }}">{{ $prog->libele }}</option>
                          @endforeach
                    </select>
                        </div>
                    
                        <div class="form-group col-xl-2 col-lg-2">
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
                        <th scope="col">Wording</th>
                        <th scope="col">Programs</th>
                        <th scope="col">Options</th>
                        </tr>
                    </thead>
                    {{$i = ''}}
                    @foreach($niv as $nivo)
                    <tbody>
                        <tr class="text-center">
                            <th scope="row">{{++$i}}</th>
                            <td>{{ $nivo->libele }}</td>
                            <td>{{ $nivo->program->libele }}</td>
                            <td><button type="button" class="btn btn-success btn-xs mb-1" style='border-radius:5%;'  data-id="{{$nivo->id}}" data-libele_niv="{{$nivo->libele}}" data-niv_prog="{{$nivo->program_id}}"  data-toggle="modal" data-target="#edit_niveauModal"><i class="far fa-edit"></i></button>
                           
                                <button type="submit" class="mr-3 btn btn-danger btn-xs mb-1" class="" style='border-radius:5%;'  onclick="event.preventDefault();document.querySelector('#form-delete-{{$nivo->id}}').submit();"  name="delete" data-toggle="tooltip" title="supprimer"><i class="far fa-trash-alt"></i></button>
                                <form id="form-delete-{{$nivo->id}}" action="{{route('admin.programms.niveaux.destroy',$nivo->id)}}" method="post">
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
  <!-- fin du row des ajouts des niveau -->





    <!-- Row pour ajout des diplome -->
    <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 text-center justify-content-between">
          <h4 class="m-0 font-weight-bold text-primary">Add Diploma</h4>
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
              <form action="{{ route( 'admin.programms.diplomes.store' ) }}" method="POST">
                @csrf
                    <div class="row">
                        <div class="form-group col-xl-4 col-lg-4">
                        <label for="libele">Wording</label>
                        <input type="text" class="form-control" id="libele" name="libele" value="">
                        </div>

                        <div class="form-group col-xl-6 col-lg-6">
                        <label for="prog_dip">Programs</label>
                        <select name="prog_dip" id="" class="form-control">
                          @foreach($programms as $prog)
                            <option value="{{ $prog->id }}">{{ $prog->libele }}</option>
                          @endforeach
                    </select>
                        </div>
                    
                        <div class="form-group col-xl-2 col-lg-2">
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
                        <th scope="col">Wording</th>
                        <th scope="col">Programs</th>
                        <th scope="col">Options</th>
                        </tr>
                    </thead>
                    {{$i = ''}}
                    @foreach($diplome as $dip)
                    <tbody>
                        <tr class="text-center">
                            <th scope="row">{{++$i}}</th>
                            <td>{{$dip->libele}}</td>
                            <td>{{$dip->program->libele ?? ''}}</td>
                            <td><button type="button" class="btn btn-success btn-xs mb-1" style='border-radius:5%;'  data-id="{{$dip->id}}" data-libele_dip="{{$dip->libele}}" data-dip_prog="{{$dip->program_id}}"  data-toggle="modal" data-target="#edit_diplomeModal"><i class="far fa-edit"></i></button>
                           
                                <button type="submit" class="mr-3 btn btn-danger btn-xs mb-1" class="" style='border-radius:5%;'  onclick="event.preventDefault();document.querySelector('#form-delete-{{$dip->id}}').submit();"  name="delete" data-toggle="tooltip" title="supprimer"><i class="far fa-trash-alt"></i></button>
                                <form id="form-delete-{{$dip->id}}" action="{{route('admin.programms.diplomes.destroy',$dip->id)}}" method="post">
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




  <!-- row de l'affichage des post -->
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 text-center justify-content-between">
          <h4 class="m-0 font-weight-bold text-primary ">Add Faculty</h4>
        </div>
        <!-- Card Body -->
        <div class="card-body">
        <form action=" {{route('admin.programms.filliers.store')}} " method="POST" enctype="multipart/form-data">
                @csrf
                <!-- {{method_field('POST')}} -->

                <div class="row">

                <div class="form-group col-xl-4 col-lg-4">
                    <label for="tite">Programs Group</label>
                    <select name="program_id" class="form-control">
                    @foreach($programms as $prog)
                      <option value="{{ $prog->id }}">{{ $prog->libele }}</option>
                    @endforeach
                    </select>
                    </div>
                    

                    <div class="form-group col-xl-4 col-lg-4">
                    <label for="diplome">Wording</label>
                    <input type="text" class="form-control" name="libele" value="">
                    </div>


                    <div class="form-group col-xl-4 col-lg-4">
                    <label for="icon">Icone</label>
                    <input type="file" name="icon" class="form-control" id="icon">
                    </div>

                </div>
                

                    <div class="row">
                        <div class="form-group col-xl-6 col-lg-6">
                        <label for="outCome">Outcome</label>
                        <textarea 
                          name="outCome" 
                          id="editor-outcome" 
                          class="form-control" 
                          data-id="{{ $newfil->id }}"
                          data-type="{{ get_class($newfil) }}"
                          data-url="{{ route('attachments.store') }}"
                          cols="30" rows="6"></textarea>
                        </div>
                
                    
                        <div class="form-group col-xl-6 col-lg-6">
                        <label for="duration">Duration</label>
                        <textarea 
                          name="duration" 
                          class="form-control" 
                          id="editor-duration" 
                          data-id="{{ $newfil->id }}"
                          data-type="{{ get_class($newfil) }}"
                          data-url="{{ route('attachments.store') }}"
                          cols="30" rows="6"></textarea>
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-group col-xl-6 col-lg-6">
                        <label for="describe">Describe</label>
                        {{-- <div id="editor-describe"></div> --}}
                        <textarea 
                          name="describe" 
                          class="form-control" 
                          id="editor-describe" 
                          data-id="{{ $newfil->id }}"
                          data-type="{{ get_class($newfil) }}"
                          data-url="{{ route('attachments.store') }}"
                          cols="30" rows="6"></textarea>
                        </div>
                
                    
                        <div class="form-group col-xl-6 col-lg-6">
                        <label for="requirement">Requirement</label>
                        <textarea 
                          name="requirement" 
                          class="form-control" 
                          id="editor-requirement"
                          data-id="{{ $newfil->id }}"
                          data-type="{{ get_class($newfil) }}"
                          data-url="{{ route('attachments.store') }}" 
                          cols="30" rows="6"></textarea>
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-group col-xl-6 col-lg-6">
                          <button type="submit" class="btn btn-primary btn-block">Add</button>
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
              <form action="{{ route('admin.programms.modules.store') }}" method="POST">
                @csrf
                <!-- {{method_field('POST')}} -->
                    <div class="row">
                        <div class="form-group col-xl-4 col-lg-4">
                        <label for="libele">Wording</label>
                        <input type="text" class="form-control" name="libele" value="">
                        </div>

                             <div class="form-group col-xl-4 col-lg-4">
                          <label for="specialite">Select Faculty</label>
                          <select name="specialite" class="form-control">
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

                        <div class="form-group col-xl-4 col-lg-4">
                          <label for="niveau_id">Level Group</label>
                          <select name="niveau_id" class="form-control">
                          @foreach($niv as $nivs)
                            <option value="{{ $nivs->id }}">{{ $nivs->libele }}</option>
                          @endforeach
                          </select>
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-group col-xl-6 col-lg-6">
                          <button type="submit" class="btn btn-primary btn-block">Add</button>
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
  <!-- fin du row des ajouts de post -->
  
  <!-- Content Row -->

  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 text-center justify-content-between">
          <h4 class="m-0 font-weight-bold text-primary">Add Specialty</h4>
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
              <form action=" {{route('admin.programms.specialites.store')}}" method="POST">
                @csrf
                <!-- {{method_field('PUT')}} -->
                    <div class="row">
                        <div class="form-group col-xl-6 col-lg-6">
                        <label for="tite">Wording</label>
                        <input type="text" class="form-control" name="title" value="">
                        </div>

                        <div class="form-group col-xl-6 col-lg-6">
                          <label for="tite">Select Faculty</label>
                          <select name="specialite" class="form-control">
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
                          <button type="submit" class="btn btn-primary btn-block">Add</button>
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
  <!-- fin du row des ajouts de post -->


  <!-- <div class="row"> -->
    <!-- Area Chart -->
    <!-- <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4"> -->
        <!-- Card Header - Dropdown -->
        <!-- <div class="card-header py-3 text-center justify-content-between">
          <h4 class="m-0 font-weight-bold text-primary">Add Unites</h4>
        </div> -->
        <!-- Card Body -->
        <!-- <div class="card-body">
          <div class="">
            <div class="container">
              @if (session('success'))
              <div class="alert alert-success">
                {{ session('success')}}
              </div>
              @endif
              <form action="" method="POST">
                @csrf
                {{method_field('PUT')}} 
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
  </div> -->
  <!-- fin du row des ajouts de post -->


             <!-- modal edition des programss -->
             @foreach($programms as $prog)
                       <div class="modal fade" id="edit_progModal" tabindex="-1" role="dialog" aria-labelledby="update_progModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="update_progModalLabel">Edit programs</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{route('admin.programms.programms.update','programms')}}" method="post">
                                        {{method_field('patch')}}
                                       {{@csrf_field()}}
                                            <div class="modal-body">
                                                <input type="hidden" name="prog" id="prog_id" value="{{$prog->id}}">
                                                <label for="libele" style="color:beige;" class="text-dark">{{ __('Wording') }}</label>
                                                <input  id="libele" type="text" class="form-control @error('name') is-invalid @enderror text-center" name="libele" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                @error('libele')
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



                                          
                     <!-- modal edition des niveau -->
             @foreach($niv as $nivo)
                       <div class="modal fade" id="edit_niveauModal" tabindex="-1" role="dialog" aria-labelledby="update_Label" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="update_Label">Edit Level</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{route('admin.programms.niveaux.update','niveau')}}" method="post">
                                        {{method_field('patch')}}
                                       {{@csrf_field()}}
                                            <div class="modal-body">
                                                <input type="hidden" name="nivo" id="niv_id" value="{{$nivo->id}}">
                                                <label for="libele_niv" style="color:beige;" class="text-dark">{{ __('Wording') }}</label>
                                                <input  id="libele_niv" type="text" class="form-control @error('name') is-invalid @enderror text-center" name="libele_niv" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                @error('libele')
                                                  <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                  </span>
                                                @enderror


                                                <label for="niv_prog" style="color:beige;" class="text-dark">{{ __('Programs') }}</label>
                                                <select name="niv_prog" class="form-control @error('name') is-invalid @enderror text-center" required autocomplete="name" autofocus>
                                                @foreach( $programms as $progs )
                                                  <option value=" {{ $progs->id }} "> {{ $progs->libele }} </option>
                                                @endforeach
                                                </select>
                                                @error('programms')
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
                    <!-- fin du modal d'edition des niveau -->




                    @foreach($diplome as $dipe)
                       <div class="modal fade" id="edit_diplomeModal" tabindex="-1" role="dialog" aria-labelledby="update_Label" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="update_Label">Edit Diploma</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{route('admin.programms.diplomes.update','diplome')}}" method="post">
                                        {{method_field('patch')}}
                                       {{@csrf_field()}}
                                            <div class="modal-body">
                                                <input type="hidden" name="diplome" id="dip_id" value="{{$dipe->id}}">
                                                <label for="libele_dip" style="color:beige;" class="text-dark">{{ __('Wording') }}</label>
                                                <input  id="libele_dip" type="text" class="form-control @error('name') is-invalid @enderror text-center" name="libele_dip" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                @error('libele')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror


                                                <label for="dip_prog" style="color:beige;" class="text-dark">{{ __('Programs') }}</label>
                                                <select name="dip_prog" class="form-control @error('name') is-invalid @enderror text-center" required autocomplete="name" autofocus>
                                                @foreach( $programms as $progs )
                                                  <option value=" {{ $progs->id }} "> {{ $progs->libele }} </option>
                                                @endforeach
                                                </select>
                                                @error('programms')
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
                    <!-- fin du modal d'edition des niveau -->

</div>
@endsection

@section('js')
<script src="{{ asset('/tinymce/jquery.tinymce.min.js')}}"></script>
<script src="{{ asset('/tinymce/tinymce.min.js')}}"></script>
<script src="{{ asset('/js/admin/editor.js')}}"></script>

@endsection