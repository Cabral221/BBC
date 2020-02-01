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
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Add Partners</h6>
          <button type="button" class="btn btn-primary btn-xs mb-1" data-toggle="modal" data-target="#partModal"><i class="far fa-plus-square"></i></button>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="row">
            @foreach($part as $p)
            <div class="col-xl-3 col-md-6 mb-1">
              <div class="card border shadow h-100 py-2">
                <div class="card-body p-0 pl-2">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$p->name}}</div>
                      <div class="mb-1"><img src="{{asset($p->logo)}}" class="img-responsive" alt="" srcset="" style="width:100px;height:100px;"></div>
                    </div>
                    <button data-toggle="modal"   data-target="#imageModal" data-id="{{$p->id}}" data-name="{{$p->name}}" data-logo="{{$p->logo}}" data-link="{{$p->link}}"   title="Edit" class="pd-setting-ed btn btn-primary text-white mr-3"><i class="far fa-edit"></i></button>
                    <button type="submit" class="mr-3 btn btn-danger btn-xs"  onclick="event.preventDefault();document.querySelector('#form-delet-{{$p->id}}').submit();"  name="delete" data-toggle="tooltip" title="supprimer"><i class="fas fa-trash-alt"></i></button>
                    <form id="form-delet-{{$p->id}}" action="{{route('admin.params.parteners.destroy',$p->id)}}" method="post">

                      @csrf
                      @method('delete') 
                    </form>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          
        </div>
      </div>
    </div>
  </div>
  
  
  <!-- row des slides -->
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Add Slides</h6>
          <button type="button" class="btn btn-primary btn-xs mb-1" data-toggle="modal" data-target="#slideModal"><i class="far fa-plus-square"></i></button>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="row">
            @foreach($slide as $sl)
            <div class="col-xl-4 col-lg-4 mb-1">
              <div class="card p-2" style="width: 20rem;" >
                <img class="card-img-top img-responsive mb-1" src="{{asset($sl->image)}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title" ><button type="button" data-id="{{$sl->id}}" data-image="{{$sl->image}}" class="btn btn-primary btn-xs mb-1" data-toggle="modal" data-target="#update_slides"><i class="far fa-edit"></i></button></h5>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- fin du row des slides -->
  
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Add Teams</h6>
          <button type="button" class="btn btn-primary btn-xs mb-1" data-toggle="modal" data-target="#teamsModal"><i class="far fa-plus-square"></i></button>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <table class="table table-striped table-dark">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Jobs</th>
                <th scope="col">Images</th>
                <th scope="col">Options</th>
              </tr>
            </thead>
            {{$i = '' }}
            @foreach($team as $teams)
            <tbody>
              <tr>
                <th scope="row">{{++$i}}</th>
                <td>{{$teams->firstname}}</td>
                <td>{{$teams->lastname}}</td>
                <td>{{$teams->job}}</td>
                <td><img src="{{asset($teams->image)}}" style="width:50px;height:50px;border-radius:100%;" alt="" srcset=""></td>
                <td>
                  <button type="button" class="btn btn-primary btn-xs mb-1"  data-id="{{$teams->id}}" data-firstname="{{$teams->firstname}}" data-lastname="{{$teams->lastname}}" data-job="{{$teams->job}}" data-image="{{asset($teams->image)}}" data-toggle="modal" data-target="#edit_teamsModal"><i class="far fa-edit"></i></button>
                  <button type="submit" class="mr-3 btn btn-danger btn-xs"  onclick="event.preventDefault();document.querySelector('#form-delete-{{$teams->id}}').submit();"  name="delete" data-toggle="tooltip" title="supprimer"><i class="fas fa-trash-alt"></i></button>
                  <form id="form-delete-{{$teams->id}}" action="{{route('admin.members.teams.destroy',$teams->id)}}" method="post">
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
  <!-- Debut des teams -->
  
  <!-- Fin des teams -->
  
  <!-- Content Row -->
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Infos</h6>
          
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <table class="table table-striped table-default">
            <thead>
              <tr>
                <th scope="col">E-mail</th>
                <th scope="col">Phone</th>
                <th scope="col">Adress</th>
                <th scope="col">BP</th>
                <th scope="col">Option</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$info->email}}</td>
                <td>{{$info->phone}}</td>
                <td>{{$info->address}}</td>
                <td>{{$info->bp}}</td>
                <td><button data-toggle="modal"  data-target="#exampleModal" data-id="{{$info->id}}" data-adress="{{$info->address}}" data-bp="{{$info->bp}}" data-phone="{{$info->phone}}"  data-email="{{$info->email}}" title="Edit" class="pd-setting-ed text-white btn btn-primary"><i class="far fa-edit"></i></button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  
  
  <!-- Debut des teams -->
  
  <!-- Fin des teams -->
  
  
  <!-- Modal -->
  <div class="modal fade" id="partModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Partners Image</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('admin.params.parteners.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <label for="name" class="text-dark">Name</label>
            <input type="text" name="name" class="form-control">
            
            <label for="link" class="text-dark">Lien</label>
            <input type="text" name="link" class="form-control">
            
            <label for="logo" class="text-dark">Image</label>
            <input type="file" name="logo" class="form-control">
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Add</button>
            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- fin du modal des logo partener -->
</div> 
<!-- Debut du Modal des infos -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier les Infos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('admin.params.infos.update','infos')}}" method="post">
        {{method_field('patch')}}
        {{@csrf_field()}}
        <div class="modal-body">
          <input type="hidden" name="info" id="info_id" value="{{$info->id}}">
          
          <label for="email" style="color:beige;" class="text-dark">{{ __('Email') }}</label>
          <input  id="email" type="email" class="form-control @error('name') is-invalid @enderror text-center" name="email" value="{{ old('name') }}" required autocomplete="name" autofocus>
          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
          
          <label for="phone" style="color:beige;" class="text-dark">{{ __('Phone') }}</label>
          <input  id="phone" type="number" class="form-control @error('name') is-invalid @enderror text-center" name="phone" value="{{ old('name') }}" required autocomplete="name" autofocus>
          @error('phone')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
          
          <label for="adress" style="color:beige;" class="text-dark">{{ __('Adress') }}</label>
          <input  id="adress" type="text" class="form-control @error('name') is-invalid @enderror text-center" name="adress" value="{{ old('name') }}" required autocomplete="name" autofocus>
          @error('adress')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
          
          <label for="bp" style="color:beige;" class="text-dark">{{ __('Adress') }}</label>
          <input  id="bp" type="text" class="form-control @error('name') is-invalid @enderror text-center" name="bp" value="{{ old('name') }}" required autocomplete="name" autofocus>
          @error('bp')
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
<!-- Fin du modal des infos -->


<!-- modal edition des logo partners -->
@foreach($part as $p)
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="imageModalLabel">Modifier les Part</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      <form action="{{route('admin.params.parteners.update','part')}}" method="post" enctype="multipart/form-data">
        {{method_field('patch')}}
        {{@csrf_field()}}
        <div class="modal-body">
          <input type="hidden" name="part" id="info_id" value="{{$p->id}}">
          
          <label for="name" style="color:beige;" class="text-dark">{{ __('Name') }}</label>
          <input  id="name" type="text" class="form-control @error('name') is-invalid @enderror text-center" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
          @error('name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
          
          <label for="link" style="color:beige;" class="text-dark">{{ __('Lien') }}</label>
          <input  id="link" type="text" class="form-control @error('name') is-invalid @enderror text-center" name="link" value="{{ old('name') }}" required autocomplete="name" autofocus>
          @error('lien')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
          
          <label for="logo" style="color:beige;" class="text-dark">{{ __('Logo') }}</label>
          <input  id="logo" type="file" class="form-control @error('name') is-invalid @enderror text-center" name="logo" value="{{ old('name') }}" required autocomplete="name" autofocus>
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
<!-- fin du modal des partners -->


<!-- Modal d'ajout des slides -->
<div class="modal fade" id="slideModal" tabindex="-1" role="dialog" aria-labelledby="slideModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="slideModalLabel">Slides Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('admin.templaits.slides.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          <label for="image" class="text-dark">Image</label>
          <input type="file" name="image" class="form-control">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Add</button>
          <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- fin du modal d'ajout des slides -->
<!-- Content Row -->


<!-- modal edition des slides -->
@foreach($slide as $sl)
<div class="modal fade" id="update_slides" tabindex="-1" role="dialog" aria-labelledby="update_slidesModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="update_slidesModalLabel">Modifier vos slides</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('admin.templaits.slides.update','slides')}}" method="post" enctype="multipart/form-data">
        {{method_field('patch')}}
        {{@csrf_field()}}
        <div class="modal-body">
          <input type="hidden" name="slides" id="info_id" value="{{$sl->id}}">
          <label for="image" style="color:beige;" class="text-dark">{{ __('Logo') }}</label>
          <input  id="image" type="file" class="form-control @error('name') is-invalid @enderror text-center" name="image" value="{{ old('name') }}" required autocomplete="name" autofocus>
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
<!-- fin du modal d'edition des slides -->

<!-- Debut du Modal des teams -->
<div class="modal fade" id="teamsModal" tabindex="-1" role="dialog" aria-labelledby="teamsModalModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="teamsModalModalLabel">Ajouter les Teams</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('admin.members.teams.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          <label for="firstname" style="color:beige;" class="text-dark">{{ __('Firstname') }}</label>
          <input  id="firstname" type="text" class="form-control @error('name') is-invalid @enderror text-center" name="firstname" value="{{ old('name') }}" required autocomplete="name" autofocus>
          @error('firstname')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
          <label for="lastname" style="color:beige;" class="text-dark">{{ __('Lastname') }}</label>
          <input  id="lastname" type="text" class="form-control @error('name') is-invalid @enderror text-center" name="lastname" value="{{ old('name') }}" required autocomplete="name" autofocus>
          @error('lastname')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
          
          <label for="job" style="color:beige;" class="text-dark">{{ __('Job') }}</label>
          <input  id="job" type="text" class="form-control @error('name') is-invalid @enderror text-center" name="job" value="{{ old('name') }}" required autocomplete="name" autofocus>
          @error('job')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
          
          <label for="image" style="color:beige;" class="text-dark">{{ __('Image') }}</label>
          <input  id="image" type="file" class="form-control @error('name') is-invalid @enderror text-center" name="image" value="{{ old('name') }}" required autocomplete="name" autofocus>
          @error('image')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Add</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>
<!-- Fin du modal des teams -->


<!-- Debut edition du Modal des teams -->
@foreach($team as $teams)
<div class="modal fade" id="edit_teamsModal" tabindex="-1" role="dialog" aria-labelledby="teamsModalModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="teamsModalModalLabel">Update Teams</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form action="{{route('admin.members.teams.update','team')}}" method="post" enctype="multipart/form-data">
        {{method_field('patch')}}
        {{@csrf_field()}}
        <div class="modal-body">
          <input type="hidden" name="team" id="info_id" value="{{$teams->id}}">
          <label for="firstname" style="color:beige;" class="text-dark">{{ __('Firstname') }}</label>
          <input  id="firstname" type="text" class="form-control @error('name') is-invalid @enderror text-center" name="firstname" value="{{ old('name') }}" required autocomplete="name" autofocus>
          @error('firstname')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
          <label for="lastname" style="color:beige;" class="text-dark">{{ __('Lastname') }}</label>
          <input  id="lastname" type="text" class="form-control @error('name') is-invalid @enderror text-center" name="lastname" value="{{ old('name') }}" required autocomplete="name" autofocus>
          @error('lastname')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
          
          <label for="job" style="color:beige;" class="text-dark">{{ __('Job') }}</label>
          <input  id="job" type="text" class="form-control @error('name') is-invalid @enderror text-center" name="job" value="{{ old('name') }}" required autocomplete="name" autofocus>
          @error('job')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
          
          <label for="image" style="color:beige;" class="text-dark">{{ __('Image') }}</label>
          <input  id="image" type="file" class="form-control @error('name') is-invalid @enderror text-center" name="image" value="{{ old('name') }}" required autocomplete="name" autofocus>
          @error('image')
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
<!-- Fin du modal edition des teams -->

</div>
@endsection


