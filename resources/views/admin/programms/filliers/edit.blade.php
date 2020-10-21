@extends('layouts/admin/app2')
@section('body')
<div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 ">Dashboard</h1>
        </div>

          <!-- row de l'affichage des post -->
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 text-center justify-content-between">
          <h4 class="m-0 font-weight-bold text-primary ">Edit Faculty</h4>
        </div>
        <!-- Card Body -->
        <div class="card-body">
        <form action=" {{route('admin.programms.filliers.update',$fil->id)}} " method="POST" enctype="multipart/form-data" id="form_fil_edit">
                @csrf
                {{method_field('PUT')}}

                <div class="row">

                <div class="form-group col-xl-4 col-lg-4">
                    <label for="tite">{{$fil->program->libele}}</label>
                    <select name="program_id" id="" class="form-control">
                    @foreach($progs as $prog)
                      <option value="{{ $prog->id }}">{{ $prog->libele }}</option>
                    @endforeach
                    </select>
                    </div>
                    

                    <div class="form-group col-xl-4 col-lg-4">
                    <label for="diplome">Wording</label>
                    <input type="text" class="form-control" name="libele" value="{{$fil->libele}}">
                    </div>

                    <div class="form-group col-xl-4 col-lg-4">
                    <label for="icon">Icone</label>
                    <input type="file" name="icon" class="form-control" id="icon" value="">
                    </div>

                </div>
                    
                    <div class="row">
                        <div class="form-group col-xl-6 col-lg-6">
                        <label for="outCome">Outcome</label>
                        <textarea 
                          name="outCome" 
                          class="form-control" 
                          id="editor-outcome" 
                          data-id="{{ $fil->id }}"
                          data-type="{{ get_class($fil) }}"
                          data-url="{{ route('attachments.store') }}"
                          cols="30" rows="6" >{{$fil->outCome}}</textarea>
                        </div>
                
                    
                        <div class="form-group col-xl-6 col-lg-6">
                        <label for="duration">Duration</label>
                        <textarea 
                          name="duration" 
                          id="editor-duration" 
                          data-id="{{ $fil->id }}"
                          data-type="{{ get_class($fil) }}"
                          data-url="{{ route('attachments.store') }}"
                          class="form-control" 
                          cols="30" rows="6" placeholder="">{{$fil->duration}}</textarea>
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-group col-xl-6 col-lg-6">
                        <label for="describe">Describe</label>
                        <textarea 
                          name="describe" 
                          class="form-control" 
                          id="editor-describe" 
                          data-id="{{ $fil->id }}"
                          data-type="{{ get_class($fil) }}"
                          data-url="{{ route('attachments.store') }}"
                          cols="30" rows="6">{{$fil->describe}}</textarea>
                        </div>
                
                    
                        <div class="form-group col-xl-6 col-lg-6">
                        <label for="requirement">Requirement</label>
                        <textarea 
                          name="requirement" 
                          class="form-control" 
                          id="editor-requirement"
                          data-id="{{ $fil->id }}"
                          data-type="{{ get_class($fil) }}"
                          data-url="{{ route('attachments.store') }}" 
                          cols="30" rows="6">{{$fil->requirement}}</textarea>
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-group col-xl-6 col-lg-6">
                          <button type="submit" class="btn btn-primary btn-block">Edit</button>
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
  <!-- fin du row d'affichage des post -->

</div>
@endsection

@section('js')
<script src="{{ asset('/tinymce/jquery.tinymce.min.js')}}"></script>
<script src="{{ asset('/tinymce/tinymce.min.js')}}"></script>
<script src="{{ asset('/js/admin/editor.js')}}"></script>
@endsection