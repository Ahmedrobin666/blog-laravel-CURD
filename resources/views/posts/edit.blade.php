@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" required>
        </div>

        <div>
            <label for="body">Body:</label>
            <textarea id="body" name="body" required>{{ old('body', $post->body) }}</textarea>
        </div>

        <button type="submit">Update</button>
    </form>
@endsection

