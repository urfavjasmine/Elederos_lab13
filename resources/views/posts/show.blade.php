@extends('layouts.app')

@section('content')

<div class="row h-100 align-items-center justify-content-center">
    <div class="col col-lg-8 col-md-10 col-sm-12">
        <div class="card p-5">
            <div class="text-center mb-4">
                <h1 class="display-4">{{ $post->title }}</h1>
                <p class="text-muted">By {{ $post->name }} on {{ $post->created_at->format('F j, Y') }}</p>
            </div>

            <div class="mb-4">
                <p class="lead">{{ $post->body }}</p>
            </div>

            <div class="text-center">
                <a href="{{ route('posts.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-bar-left"></i> Back to Posts</a>
            </div>
        </div>
    </div>
</div>

@endsection