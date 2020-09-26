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
  
  <!-- Row pour ajout des post -->
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 text-center justify-content-between">
          <h4 class="m-0 font-weight-bold text-primary">Add News</h4>
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
              <form action="{{ route( 'admin.blog.news.store' ) }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                
                <label for="libele">Title</label>
                <input type="text" class="form-control mb-3" id="libele" name="libele" value="">
                
                <label for="libele">Date and hour <small class="muted">Ex: 01/01/2002 18:00</small></label>
                <input type="datetime-local" class="form-control mb-3" id="libele" name="date" value="">
                
                <label for="content" style="mt-4">Description of event</label>
                <textarea name="content" id="editor" class="form-control" cols="30" rows="10"></textarea>
                
                
                <br>
                <div class="form-group row">
                  <div class="col-xl-6"><button class="btn btn-primary btn-block" type="submit">Add</button></div>
                  <div class="col-xl-6"><button class="btn btn-success btn-block" type="reset">Reset</button></div>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- fin du row des ajouts de post -->
  
  
  
  <!-- Row pour ajout des post -->
  @foreach($news as $n)
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 ">
          <div class="row">
            <div class="col-xl-10"><h4 class="m-0 font-weight-bold text-primary text-capitalize">{{ $n->title }}</h4> Date: {{ $n->date }}</div>
            <div class="col-xl-2">
              <button type="button" class="btn btn-success btn-xs mb-1" style='border-radius:5%;'  data-id="{{$n->id}}" data-libele="{{$n->title}}" data-date="{{ $n->date }}" data-editor="{{$n->content}}"  data-toggle="modal" data-target="#edit_newModal"><i class="far fa-edit"></i></button>
              
              <button type="submit" class="mr-3 btn btn-danger btn-xs mb-1" class="" style='border-radius:5%;'  onclick="event.preventDefault();document.querySelector('#form-delete-{{$n->id}}').submit();"  name="delete" data-toggle="tooltip" title="supprimer"><i class="far fa-trash-alt"></i></button>
              <form id="form-delete-{{$n->id}}" action="{{route('admin.blog.news.destroy',$n->id)}}" method="post">
                @csrf
                @method('delete') 
              </form>
            </div>
          </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="p-0 m-0">
            <div class="container">
              {!! $n->content !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  {{ $news->links() }}
  <!-- fin du row des ajouts de post -->
  
  
  
  
  
  @foreach($news as $new)
  <div class="modal fade" id="edit_newModal" tabindex="-1" role="dialog" aria-labelledby="update_newModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="update_newModalLabel">Edit New</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('admin.blog.news.update','News')}}" method="post" novalidate>
          {{method_field('patch')}}
          {{@csrf_field()}}
          <div class="modal-body">
            <input type="hidden" name="lib_id" id="new_id" value="{{$new->id}}">
            <label for="libele" style="color:beige;" class="text-dark">{{ __('Wording') }}</label>
            <input  id="libele" type="text" class="form-control @error('libele') is-invalid @enderror text-center" name="libele" value="{{ old('name') ?? $new->libele }}" required autocomplete="libele" autofocus>
            
            @error('libele')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
            <label for="date" style="color:beige;" class="text-dark">{{ __('Date') }}</label>
            <input  id="date" type="datetime-local" class="form-control @error('date') is-invalid @enderror text-center" name="date" value="{{ $new->date ?? old('date')  }}" required>
            @error('date')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
            
            
            <label for="editorModal" style="color:beige;" class="text-dark">{{ __('Content') }}</label>
            <textarea id="editorModal" cols="30" rows="10"  class="form-control @error('content') is-invalid @enderror text-center" name="content" required>{{ old('content') }}</textarea>
            
            @error('content')
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


@section('js')
<script src="{{ asset('/tinymce/jquery.tinymce.min.js')}}"></script>
<script src="{{ asset('/tinymce/tinymce.min.js')}}"></script>
<script src="{{ asset('/js/admin/editor.js')}}"></script>
@endsection