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
  </div>
  
    <!-- Row pour ajout des post -->
    <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 text-center justify-content-between">
          <h4 class="m-0 font-weight-bold text-primary">Add Documents</h4>
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
              <form action="{{ route('admin.blog.documents.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="form-group col-xl-5 col-lg-5">
                        <label for="libele">Name</label>
                        <input type="text" class="form-control" id="libele" name="libele" value="">
                        </div>


                        <div class="form-group col-xl-5 col-lg-5">
                        <label for="url">Documents</label>
                        <input type="file" class="form-control" id="url" name="url" value="">
                        </div>
                
                    
                        <div class="form-group col-xl-2 col-lg-2">
                        <label for="">&nbsp</label>
                          <button class="btn btn-primary btn-block" type="submit">Add</button>
                        </div>

                    </div>
              </form>
                    <div class="">
                    <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Trash</th>
                        </tr>
                    </thead>
                    {{$i = ''}}
                    @foreach($doc as $prog)
                    <tbody>
                        <tr class="text-center">
                            <th scope="row">{{++$i}}</th>
                            <td>{{$prog->name}}</td>
                            <td>
                                <button type="submit" class="mr-3 btn btn-danger btn-xs mb-1" class="" style='border-radius:5%;'  onclick="event.preventDefault();document.querySelector('#form-delete-{{$prog->id}}').submit();"  name="delete" data-toggle="tooltip" title="supprimer"><i class="far fa-trash-alt"></i></button>
                                <form id="form-delete-{{$prog->id}}" action="{{route('admin.blog.documents.destroy',$prog->id)}}" method="post">
                                @csrf
                                @method('delete') 
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                    </table>
                    {{ $doc->links() }}
                </div>
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
<!-- <script src="{{ asset('/tinymce/jquery.tinymce.min.js')}}"></script>
<script src="{{ asset('/tinymce/tinymce.min.js')}}"></script>
<script src="{{ asset('/js/admin/editor.js')}}"></script>
<script src="{{ asset('/js/admin/editor2.js')}}"></script> -->
@endsection