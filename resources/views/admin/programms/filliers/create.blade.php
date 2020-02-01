@extends('layouts/admin/app')
@section('body')
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800 ">Dashboard</h1>
</div>

    <!-- Row pour ajout des post -->
   
    <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 text-center justify-content-between">
          <h4 class="m-0 font-weight-bold text-primary">{{ $fil->program->libele }} : {{ $fil->libele }}</h4>
        </div>
        <!-- Card Body -->
       
        <div class="card-body">
         
                <div class="row">

                    <div class="col-xl-4">
            
                    <img src="{{asset($fil->icon)}}" alt="" class="pr-2" width="250px" srcset="" >
                        <div class="mt-1"> <h3>{{ $fil->libele }}</h3> </div>
                    </div>  
                  
                    <div class="col-xl-8 pl-2">
                    <h1>OutCome</h1>
                            {{ $fil->outCome }}
                        </div>

                </div>
                    <div class="row p-2">
                   <h1>Duration</h1>
                    {{ $fil->duration }}
                    
                    </div>
                  
                <div class="row p-2">
                      
                        <div class="col-xl-6">
                        <h1>Describe</h1>
                            {{ $fil->describe }}
                        </div>

                        <div class="col-xl-6">
                        <h1>Requirement</h1>
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