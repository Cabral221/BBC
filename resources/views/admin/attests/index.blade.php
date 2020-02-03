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
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">All attests</h6>
                    <a href="{{ route('admin.params.attests.create') }}" class="btn btn-success">Add</a>
                    {{-- <button data-toggle="modal"  data-target="#wordModal" data-id="{{$attest->id}}" data-editor="{{ $words->content }}" title="Edit" class="pd-setting-ed text-success">Edit</button> --}}
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="">
                        <div class="row bg-default">
                            
                            @foreach($attests as $attest)
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-header">{{ $attest->author }}</h3>
                                        <p>
                                            @if ($attest->publish == 1)
                                                <span class="badge badge-pill badge-success">Publish</span>
                                            @else
                                                <span class="badge badge-pill badge-danger">Not publish</span>
                                            @endif
                                        </p>
                                        <p class="card-text">{!! $attest->attest !!}</p>
                                        <div class="card-footer text-center">
                                            <a href="{{ route('admin.params.attests.edit',$attest->id) }}" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('admin.params.attests.destroy',$attest->id) }}" id="form-attest-delete-{{$attest->id}}" method="POST" style="display:none;">
                                                @csrf
                                                @method('DELETE');
                                            </form>
                                            <a href="#" class="btn btn-danger delete-attest" onclick="if(confirm('Etes vous vraiment sur ?')){event.preventDefault();document.getElementById('form-attest-delete-{{$attest->id}}').submit()}">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        {{ $attests->links() }}
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