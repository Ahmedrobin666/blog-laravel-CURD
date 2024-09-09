@extends('layouts.app')

@section('content')
    <h1>Create New Post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required>
        </div>

        <div>
            <label for="body">Body:</label>
            <textarea id="body" name="body" required>{{ old('body') }}</textarea>
        </div>

        <button type="submit">Save</button>
    </form>
@endsection
