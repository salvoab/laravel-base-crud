@extends('layouts.app')

@section('title')
    Modifica post
@endsection

@section('content')
    <div class="jumbotron">
        <h1 class="display-3">Modifica post</h1>
        <p class="lead">Modifica il post: {{ $post->title }}</p>
    </div>
    

    <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="title">Titolo</label>
          <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}">
        </div>

        <div class="form-group">
          <label for="body">Articolo</label>
          <textarea class="form-control" name="body" id="body" rows="3">{{ $post->body }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Invia</button>
    </form>
    

@endsection