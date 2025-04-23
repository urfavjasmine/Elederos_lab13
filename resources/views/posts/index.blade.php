@extends('layouts.app')

@section('content')
<div class="row h-100 align-items-center justify-content-center">
    <div class="col col-lg-8 col-md-10 col-sm-12">
        <div class="card p-5 shadow-sm">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div>
                <div class="mb-4">
                    <h1 class="text-center display-4">Welcome, {{ auth()->user()->name }}!</h1>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="lead">You are logged in as {{ auth()->user()->email }}</p>
                        <form method="POST" action="/logout" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-danger"><i class="bi bi-box-arrow-left"></i> Logout</button>
                        </form>
                    </div>

                </div>

            </div>

            <div class="text-center mb-4">
                <a href="{{ route('posts.create') }}" class="btn btn-primary"> <i class="bi bi-plus-circle"></i> Create New Post</a>
            </div>

            <h2 class="text-center mb-4">All Posts</h2>

            @if($posts->isEmpty())
            <div class="alert alert-info text-center" role="alert">
                No posts available. Create your first post!
            </div>
            @else
            @foreach ($posts as $post)
            <div class="card mb-3 shadow-sm">
                <div class="card-body">
                    <h4 class="card-title">{{ $post->title }}</h4>
                    <p class="text-muted small">By {{ $post->name }} on {{ $post->created_at->format('F j, Y') }}</p>
                    <p class="card-text">{{ Str::limit($post->body, 100) }}</p>
                    <div class="d-flex gap-2">
                        <a href="{{ route('posts.show', $post->post_id) }}" class="btn btn-sm btn-info"><i class="bi bi-eye"></i> View</a>
                        <a href="{{ route('posts.edit', $post->post_id) }}" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i> Edit</a>
                        <form action="{{ route('posts.destroy', $post->post_id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i> Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
@endsection