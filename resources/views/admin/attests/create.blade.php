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
                    <h6 class="m-0 font-weight-bold text-primary">Create attest</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="">
                        <div class="row container bg-default text-center">
                            
                            <form action="{{ route('admin.params.attests.store') }}" method="POST" class="form col-md-8 col-md-offset-2 text-left">
                                @csrf
                                <div class="form-group">
                                    <label for="author" class="control-label">Author</label>
                                    <input type="text" class="form-control @error('author') is-invalid @enderror" name="author" id="author">
                                    @error('author')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" value="1" class="form-control-check pr-5 @error('publish') is-invalid @enderror" name="publish" id="publish">
                                    <label for="publish" class="form-check-label pl-3">Publish</label>
                                    @error('publish')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="editor" class="control-label">Attest</label>
                                    <textarea class="form-control @error('attest') is-invalid @enderror" name="attest" id="editor" rows="10"></textarea>
                                    @error('attest')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-success">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    


</div>
@endsection

@section('js')
<script src="{{ asset('/tinymce/jquery.tinymce.min.js')}}"></script>
<script src="{{ asset('/tinymce/tinymce.min.js')}}"></script>
<script src="{{ asset('/js/admin/editor.js')}}"></script>
@endsection