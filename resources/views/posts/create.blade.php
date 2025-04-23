@extends('layouts.app')

@section('content')

<div class="row h-100 align-items-center justify-content-center">
    <div class="col col-lg-8 col-md-10 col-sm-12">
        <div class="card p-5">
            <h1 class="text-center mb-4">Create New Post</h1>

            @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                    @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="idtitle" class="form-label">Title</label>
                    <input type="text" id="idtitle" name="title" class="form-control" value="{{ old('title') }}" placeholder="Enter post title" required>
                </div>
                <div class="mb-3">
                    <label for="idbody" class="form-label">Body</label>
                    <textarea id="idbody" name="body" class="form-control" rows="5" placeholder="Write your post content here..." required>{{ old('body') }}</textarea>
                </div>
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-success"><i class="bi bi-save"></i> Publish</button>
                    <a href="{{ route('posts.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-bar-left"></i> Back</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection