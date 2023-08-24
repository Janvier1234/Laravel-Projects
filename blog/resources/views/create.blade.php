@extends('layouts.app')

@section('content')
    <h1>Create New Post</h1>
    <form action="{{ route('blog.store') }}" method="post">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" required>
        <label for="content">Content</label>
        <textarea name="content" rows="5" required></textarea>
        <button type="submit">Create Post</button>
    </form>
@endsection
