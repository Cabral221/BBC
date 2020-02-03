@extends('layouts/admin/app')
@section('body')
  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800 ">Dashboard</h1>
</div>

  <!-- Row pour ajout des images -->
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 text-center justify-content-between">
          <h4 class="m-0 font-weight-bold text-primary">Add Image</h4>
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
              <form action="{{ route( 'admin.blog.gallerys.store' ) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- {{method_field('PUT')}} -->
                    <div class="row">
                        <div class="form-group col-xl-5 col-lg-5">
                        <input type="hidden" name="prog" id="prog_id">
                        <label for="libele">Title</label>
                        <input type="text" class="form-control" id="libele" name="libele" value="">
                        </div>

                        <div class="form-group col-xl-5 col-lg-5">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image" value="">
                        </div>

                        <div class="form-group col-xl-2 col-lg-2">
                        <label for="">&nbsp</label>
                          <button class="btn btn-primary btn-block">Add</button>
                        </div>

                    </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- fin du row des ajouts des images -->





  <!-- Row pour ajout des images -->
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 text-center justify-content-between">
          <h4 class="m-0 font-weight-bold text-primary">All Pictures</h4>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="row text-center">
            @foreach($affiche as $img)
              <div class="col-xl-3">
                  <div class="card" style="">
                      <img class="card-img-top img-responsive" src=" {{ asset($img->image) }} " alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text"> {{ $img->libele }} </p>
                    <div class="row">
                    <div class="col-xl-6"><button type="button" class="btn btn-success btn-xs mb-1" style='border-radius:5%;'  data-id="{{$img->id}}" data-libele="{{ $img->libele }}" data-image="{{$img->image}}"  data-toggle="modal" data-target="#edit_imgModal1"><i class="far fa-edit"></i></button></div>
                        <div class="col-xl-6">
                          <button type="submit" class="mr-3 btn btn-danger btn-xs mb-1" class="" style='border-radius:5%;'  onclick="event.preventDefault();document.querySelector('#form-delete-{{$img->id}}').submit();"  name="delete" data-toggle="tooltip" title="supprimer"><i class="far fa-trash-alt"></i></button>
                          <form id="form-delete-{{$img->id}}" action="{{route('admin.blog.gallerys.destroy',$img->id)}}" method="post">
                          @csrf
                          @method('delete') 
                          </form>
                        </div>
                    </div>
                    </div>
                  </div>
              </div>
            @endforeach
            </div>
            {{ $affiche->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- fin du row des ajouts des images -->



    <!-- modal edition des programss -->
  @foreach($affiche as $imge)
  <div class="modal fade" id="edit_imgModal1" tabindex="-1" role="dialog" aria-labelledby="update_progModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="update_progModalLabel">Edit Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('admin.blog.gallerys.update','gallerie')}}" method="post" enctype="multipart/form-data">
                {{method_field('patch')}}
                {{@csrf_field()}}

                    <div class="modal-body">
                        <input type="hidden" name="image_id" id="image_id" value="{{$imge->id}}">
                        <label for="libele" style="color:beige;" class="text-dark">{{ __('Wording') }}</label>
                        <input  id="libele" type="text" class="form-control @error('name') is-invalid @enderror text-center" name="libele" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('libele')
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
                        <button type="submit" class="btn btn-primary">Edit</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        
        </div>
  </div>
  </div>
  @endforeach
  <!-- fin du modal d'edition des programms -->


</div>
@endsection
