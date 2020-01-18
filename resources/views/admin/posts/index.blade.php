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
  
  <!-- Content Row -->
  <div class="row">
    
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly)</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Earnings (Monthly) Card Example -->
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
    
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                </div>
                <div class="col">
                  <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
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
    </div>
  </div>
  
    <!-- Row pour ajout des post -->
    <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Add Posts</h6>
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
  
  <!-- row de l'affichage des post -->
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">All Post</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Title</th>
                  <th scope="col">Subtitle</th>
                  <th scope="col">Comments</th>
                  <th scope="col">Options</th>
                </tr>
              </thead>
              {{$i = ''}}
              @foreach($posts as $posts)
              <tbody>
                <tr>
                  <th scope="row">{{++$i}}</th>
                  <td>{{$posts->title}}</td>
                  <td>{{$posts->subTitle}}</td>
                  <td>{{$i}}</td>
                  <td>
                    <!-- <button type="button" class="btn btn-success btn-xs mb-1" style='border-radius:5%;'  data-id="{{$posts->id}}" data-title="{{$posts->title}}" data-subtitle="{{$posts->subTitle}}" data-content="{{$posts->content}}" data-toggle="modal" data-target="#edit_postModal"><i class="far fa-edit"></i></button> -->
                    <a href="{{ route('admin.blog.posts.edit',$posts->id) }}" class="btn btn-success btn-xs mb-1" style='border-radius:5%;'><i class="far fa-edit"></i></a>
                    <button type="submit" class="mr-3 btn btn-danger btn-xs mb-1" class="" style='border-radius:5%;'  onclick="event.preventDefault();document.querySelector('#form-delete-{{$posts->id}}').submit();"  name="delete" data-toggle="tooltip" title="supprimer"><i class="far fa-trash-alt"></i></button>
                    <form id="form-delete-{{$posts->id}}" action="{{route('admin.blog.posts.destroy',$posts->id)}}" method="post">
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
  <!-- fin du row d'affichage des post -->
  
  
  
  
  <!-- Content Row -->

  
</div>
@endsection

@section('js')
<script src="{{ asset('/tinymce/jquery.tinymce.min.js')}}"></script>
<script src="{{ asset('/tinymce/tinymce.min.js')}}"></script>
<script src="{{ asset('/js/admin/editor.js')}}"></script>
@endsection