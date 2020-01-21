@extends('layouts/admin/app')
@section('body')
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800 ">Dashboard</h1>
  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

    <!-- Row pour ajout des post -->
   
    <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 text-center justify-content-between">
          <h4 class="m-0 font-weight-bold text-primary">{{ $fil->libele }}</h4>
        </div>
        <!-- Card Body -->
       
        <div class="card-body">
         
                <div class="row">

                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-xl-6">
                                <img src="{{asset($fil->icon)}}" alt="" srcset="" style="width:80px;height:80px;">
                            </div>
                            <div class="col-xl-6">
                                {{ $fil->libele }}
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-xl-6">
                                {{ $fil->diplome }}
                            </div>

                            <div class="col-xl-6">
                            {{ $fil->duration }}
                            </div>
                        </div>
                    </div>
                  
                </div>

                  
                <div class="row">
                        <div class="col-xl-4">
                            {{ $fil->outCome }}
                        </div>
                        <div class="col-xl-4">
                            {{ $fil->describe }}
                        </div>

                        <div class="col-xl-4">
                            {{ $fil->requirement }}
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