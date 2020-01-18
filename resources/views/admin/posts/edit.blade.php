@extends('layouts/admin/app')

@section('body')
<div class="container">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success')}}
        </div>
    @endif
        <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Editer l'article <span class="text-dark ">{{ $post->title }}</span></h6>
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
              <form action="{{ route('admin.blog.posts.update',$post->id)}}" method="POST">
                @csrf
                {{method_field('PUT')}}
                <div class="row">
                    <div class="form-group col-xl-6 col-lg-6">
                    <label for="tite">Title</label>
                      <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                    </div>
                    
                    <div class="form-group col-xl-6 col-lg-6">
                    <label for="subtitle">Subtitle</label>
                      <input type="text" class="form-control" name="subtitle" value="{{ $post->subTitle }}">
                    </div>
                
                </div>
                <div class="form-group">
                <label for="content">Content</label>
                  <textarea data-id="{{ $post->id }}" data-type="{{ get_class($post) }}" data-url="{{ route('attachments.store') }}" name="content" id="editor" cols="30" rows="10" class="form-control ">
                    {{ $post->content }}
                  </textarea>
                </div>
                <div class="row">
                
                    <div class="form-group col-xl-6 col-lg-6">
                      <button class="btn btn-primary btn-block">Add</button>
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
</div>
@endsection

@section('js')
<script src="{{ asset('/tinymce/jquery.tinymce.min.js')}}"></script>
<script src="{{ asset('/tinymce/tinymce.min.js')}}"></script>
<script src="{{ asset('/js/admin/editor.js')}}"></script>
@endsection