@extends('layouts/admin/app')
@section('body')
  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800 ">Dashboard</h1>
</div>

<!-- Content Row -->

<!-- Content Row -->

 <!-- Row pour ajout des books -->
 <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Add Books</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="">
            <div class="container">
              <form action="{{ route( 'admin.blog.books.store' )}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- {{method_field('PUT')}} -->
                <div class="row">
                    <div class="form-group col-xl-4 col-lg-4">
                    <label for="tite">Title</label>
                      <input type="text" id="title" class="form-control" name="title" >
                    </div>
                    
                    <div class="form-group col-xl-4 col-lg-4">
                    <label for="dateout">DateOut</label>
                      <input type="date" id="date" class="form-control" name="dateout" >
                    </div>

                    <div class="form-group col-xl-4 col-lg-4">
                    <label for="image">Image</label>
                      <input type="file" id="file" class="form-control" name="image" >
                    </div>
                
                </div>
                <div class="form-group">
                <label for="auteur">Author</label>
                <input type="text" id="auteur" class="form-control" name="auteur" >
                </div>
                <div class="row">
                
                    <div class="form-group col-xl-6 col-lg-6">
                      <button class="btn btn-primary btn-block">Add</button>
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
  <!-- fin du row des ajouts de books -->



  <div class="row">
<!-- Earnings (Monthly) Card Example -->
@foreach( $book as $b )
<div class="col-xl-3 col-md-6 mb-4">
  <div class=" h-100 py-2">
  <div class="card text-center bg-primary" style=";">
  <img class="card-img-top img-responsive" src=" {{ $b->image }} " alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title  text-white"> {{ $b->title }} </h5>
    <h5 class="card-title text-white"> {{ $b->dateOut }} </h5>
    <p class="card-text text-white"> {!! $b->auteur !!} </p>
      <div class="row text-center">
      <div class="col-xl-6">
      <button data-toggle="modal"  data-target="#bookModal" data-id="{{$b->id}}" data-auteur="{{$b->auteur}}" data-dateOut="{{$b->dateOut}}" data-title="{{$b->title}}"  data-image="{{$b->image}}" title="Edit" class="pd-setting-ed btn text-white"><i class="far fa-edit"></i></button>
      </div>
        <div class="col-xl-6">
          <button type="submit" class="mr-3 btn btn-xs text-danger"  onclick="event.preventDefault();document.querySelector('#form-delete-{{$b->id}}').submit();"  name="delete" data-toggle="tooltip" title="supprimer"><i class="fas fa-trash-alt"></i></button>
          <form id="form-delete-{{$b->id}}" action="{{route('admin.blog.books.destroy',$b->id)}}" method="post">
            @csrf
            @method('delete') 
          </form>
        </div>
      </div>
  </div>
</div>
  </div>
</div>
@endforeach
</div>
  <!-- fin du row -->
<!-- Button trigger modal -->
<!-- Modal -->
@foreach( $book as $b )
<div class="modal fade" id="bookModal" tabindex="-1" role="dialog" aria-labelledby="booklabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="booklabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('admin.blog.books.update','update')}}" method="post" enctype="multipart/form-data">
      {{method_field('patch')}}
              {{@csrf_field()}}
        <div class="modal-body">
                      <input type="hidden" id="book_id"  name="book" value="{{$b->id}}">
                      <label for="title" style="color:beige;" class="text-dark">{{ __('Title') }}</label>
                      <input  id="title" type="title" class="form-control @error('name') is-invalid @enderror text-center" name="title" value="{{ old('name') }}" required autocomplete="name" autofocus>
                      @error('title')
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

                      <label for="dateOut" style="color:beige;" class="text-dark">{{ __('Release date') }}</label>
                      <input  id="dateOut" type="date" class="form-control @error('name') is-invalid @enderror text-center" name="dateOut" value="{{ old('name') }}" required autocomplete="name" autofocus>
                      @error('dateout')
                      <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                      
                      <label for="auteur" style="color:beige;" class="text-dark">{{ __('Author') }}</label>
                      <input  id="auteur" type="text" class="form-control @error('name') is-invalid @enderror text-center" name="auteur" value="{{ old('name') }}" required autocomplete="name" autofocus>
                      @error('auteur')
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
@endforeach


</div>

@endsection


@section('js')
<script src="{{ asset('/tinymce/jquery.tinymce.min.js')}}"></script>
<script src="{{ asset('/tinymce/tinymce.min.js')}}"></script>
<script src="{{ asset('/js/admin/editor.js')}}"></script>
@endsection