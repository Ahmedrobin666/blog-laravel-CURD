@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>

    <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <a href="{{ route('posts.index') }}">Back to Posts List</a>
@endsection
