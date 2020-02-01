@extends('layouts/admin/app')
@section('body')
  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800 ">Dashboard</h1>
</div>
<!-- Row pour les logo des partenaires -->
<div class="row">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#partModal">
  Add
</button>
</div>
<div class="row">
<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (Annual)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
</div>
<!-- fin du row de logo des partenaires -->

<!-- Content Row -->
<div class="row">

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">INFOS</div>
            <!-- debut du row -->
            <div class="row no-gutters align-items-center">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">Phone</div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">Adress</div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">BP</div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-success">Edit</div>
            </div>
            <!-- fin du row -->


              <!-- debut du row -->
              <div class="row no-gutters align-items-center">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">{{$info->phone}}</div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">{{$info->adress}}</div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">{{$info->bp}}</div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  <button data-toggle="modal"  data-target="#exampleModal" data-id="{{$info->id}}" data-adress="{{$info->adress}}" data-bp="{{$info->bp}}" data-phone="{{$info->phone}}"  title="Edit" class="pd-setting-ed text-success">Edit</button>
                  </div>
            </div>
            <!-- fin du row -->

          </div>
          <div class="col-auto">
            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Pending Requests Card Example -->
  <!-- <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-comments fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!-- Modal des logo parteners -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="partModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('admin.params.infos.index')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          <label for="logo">Name</label>
          <input type="text" name="name" class="form-control">
          <label for="image">Image</label>
          <input type="file" name="logo" class="form-control">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Envoyer</button>
          <button type="reset" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        </div>
      </div>
      </form>
  </div>
</div>
  <!-- fin du modal des logo partener -->

</div> 
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
                                                <label for="phone" style="color:beige;" class="">{{ __('Phone') }}</label>
                                                <input  id="phone" type="number" class="form-control @error('name') is-invalid @enderror text-center" name="phone" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                                <label for="adress" style="color:beige;" class="">{{ __('Adress') }}</label>
                                                <input  id="adress" type="text" class="form-control @error('name') is-invalid @enderror text-center" name="adress" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                @error('adress')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                                
                                                <label for="bp" style="color:beige;" class="">{{ __('Adress') }}</label>
                                                <input  id="bp" type="text" class="form-control @error('name') is-invalid @enderror text-center" name="bp" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                @error('bp')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                                <button type="submit" class="btn btn-primary">Modifier</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                </div>
                    </div>
                    </div>
<!-- Content Row -->



</div>
@endsection


