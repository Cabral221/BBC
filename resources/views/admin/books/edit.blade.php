@extends('layouts/admin/app')
@section('body')
  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800 ">Dashboard</h1>
</div>

<!-- Content Row -->

 <!-- Row pour ajout des post -->
 <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Update Books</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="">
            <div class="container">
              <form action="{{ route( 'admin.blog.books.update' )}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{method_field('PUT')}}
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
                <label for="resume">Resume</label>
                  <textarea  name="resume" id="editor" cols="30" rows="6" class="form-control ">
                    
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