@extends('layouts/admin/app')
@section('body')
<!-- Begin Page Content -->
<div class="container-fluid">
  
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 ">Dashboard</h1>
  </div>
  
  
  
  
  
  @foreach($word as $words)
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">All Word</h6>
          <button data-toggle="modal"  data-target="#wordModal" data-id="{{$words->id}}" data-editor="{{ $words->content }}" title="Edit" class="pd-setting-ed text-success">Edit</button>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="">
            <div class="row container bg-default">
              <div class="col-xl-4">
                <img src="{{ asset($words->team->image) }}" alt="" style="width:90px;height90px;" srcset=""><br>
                <span class="text-capitalize">{{ $words->team->firstname }}  {{ $words->team->lastname }}</span>
              </div>
              
              <div class="col-xl-8">{!! $words->content !!}</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  
  
  @foreach($word as $words)
  <div class="modal fade" id="wordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit word</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('admin.params.words.update','word')}}" method="post">
          {{method_field('patch')}}
          {{@csrf_field()}}
          <div class="modal-body">
            <input type="hidden" name="word" id="word_id" value="{{$words->id}}">
            <label for="content" style="color:beige;" class="text-primary">{{ __('Content') }}</label>
            <textarea name="content" id="editor" cols="30" rows="10" class="form-control @error('name') is-invalid @enderror text-center"  value="{{ old('name') }}" required autocomplete="name" autofocus>{{ $words->content }}</textarea>
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
</div>
@endforeach

</div>
@endsection

@section('js')
<script src="{{ asset('/tinymce/jquery.tinymce.min.js')}}"></script>
<script src="{{ asset('/tinymce/tinymce.min.js')}}"></script>
<script src="{{ asset('/js/admin/editor.js')}}"></script>
@endsection