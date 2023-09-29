@extends('blog::layouts.master')

@section('content')
    <div class="row justify-content-center align-items-center">
        <div class="col-12">
            <h1 class="fw-bold">Comments</h1>
            <a href="{{ route('panel.index') }}">Back to panel</a>
        </div>
        @error('newComment')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="col-12 mt-5">
            <form action="{{ route('panel.blog.add-post') }}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input name="body" type="text" placeholder="What's in your mind" class="form-control"
                        aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="submit" id="button-addon2">Add</button>
                </div>
            </form>
        </div>
        <div class="col-12">
            @foreach($blog_posts as $post)
            <div class="card my-3">
                <div class="card-body">
                    <div class="d-flex gap-3">
                        <h5 class="card-title">{{ $post->user->name }}</h5>
                        <span class="text-muted"
                            style="font-size: 10pt">{{ $post->created_at->diffForHumans() }}</span>
                    </div>
                    <p class="card-text">{{ $post->body }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
