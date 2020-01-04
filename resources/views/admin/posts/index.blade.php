@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success')}}
        </div>
    @endif
    <h2>Liste des article</h2>
    <div class="card card-columns">
        @foreach ($posts as $post)
            <div class="card">
                <div class="card-title">
                    <h2>{{ $post->title }}</h2>
                </div>
                <div class="card-body">
                <p>{!! $post->content !!}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

@section('js')
@endsection