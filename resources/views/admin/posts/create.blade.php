@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success')}}
        </div>
    @endif
    <h2>créer un article </h2>
    <form action="{{ route('admin.posts.store')}}" method="POST">
        @csrf
        <div class="form-group">
        <input type="text" class="form-control" name="title" value="{{ $post->title }}">
        </div>
        <div class="form-group">
            <textarea data-id="{{ $post->id }}" data-type="{{ get_class($post) }}" data-url="{{ route('attachments.store') }}" name="content" id="editor" cols="30" rows="10" class="form-control">
                {{ $post->content }}
            </textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-primary">Envoyer</button>
        </div>
    </form>
</div>
@endsection

@section('js')
<script src="{{ asset('/tinymce/jquery.tinymce.min.js')}}"></script>
<script src="{{ asset('/tinymce/tinymce.min.js')}}"></script>
<script src="{{ asset('/js/admin/editor.js')}}"></script>
@endsection