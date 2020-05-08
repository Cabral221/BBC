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
      <div class="card shadow ">
        <!-- Card Header - Dropdown -->
        <div class="card-header pb-0">
        <h4 class="text-dark text-capitalize"> {{ $affiche->name }} </h4>
       </div>
        <!-- Card Body -->
        <div class="card-body">
        <p> <span class="text-success">E-mail</span> :  <span class="text-dark">{{ $affiche->email }}</span> </p>
        <p>
        {{ $affiche->message }}
        </p>
        </div>
      </div>
    </div>
  </div>
  <!-- fin du row des ajouts de post -->



<br>
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow ">
        <!-- Card Header - Dropdown -->
        <div class="card-header pb-0">
        <h4 class="text-dark text-capitalize">Reply this message</h4>
       </div>
        <!-- Card Body -->
        <div class="card-body">
            <form action=" {{route('admin.blog.messages.response')}} " method="post">
            @csrf
                <input type="hidden" name="hidden" value="{{ $affiche->email }}">
                <input type="hidden" name="name" value="{{ $affiche->name }}">
                <label for="respons">Reply</label>
                <textarea name="respons" id="editor" cols="30" rows="10"></textarea>
                <div class="row mt-2">
                    <div class="col-xl-6"> <button type="submit" class="btn btn-primary btn-block">Reply</button> </div>
                    <div class="col-xl-6"> <button type="reset" class="btn btn-success btn-block">Reset</button> </div>
                </div>
            </form>
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