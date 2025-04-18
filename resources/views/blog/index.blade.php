@extends('layouts.app')
@section('title', 'Create Blog Post')
@section('content')
    <h1>Blog posts </h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if($blog-> isEmpty())
        <p>No blog posts available.</p>
    @else
        <ul>
            @foreach($blog as $post)
                <li>
                    <h2>{{ $blog->title }}</h2>
                    <p>{{ $blog->Description }}</p>
                    <!-- <a href="{{ route('blog.show', $post->id) }}">View</a>
                    <a href="{{ route('blog.edit', $post->id) }}">Edit</a>
                    <form action="{{ route('blog.destroy', $post->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form> -->
                </li>
            @endforeach
        </ul>
    @endif
    <a href="{{ route('blog.create') }}" class="btn btn-primary">Create Blog Post</a>
@endsection