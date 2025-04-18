@extends('layouts.app')
@section('title', 'Create Blog Post')
@section('content')
    <h1>Create Blog Post</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('blog.store')}}" method = 'POST'>
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required>
        </div>
        <div>
            <label for="Description">Description</label>
            <textarea id="Description" name="Description" required>{{ old('content') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>