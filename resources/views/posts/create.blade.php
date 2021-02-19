@extends('layouts.app')

@section('title')
    Scrivi un post
@endsection

@section('content')
    <div class="jumbotron">
        <h1 class="display-3">Scrivi un post</h1>
        <p class="lead">Scrivi un post da inserire nel blog</p>
    </div>
    

    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="title">Titolo</label>
          <input type="text" class="form-control" name="title" id="title" placeholder="Titolo">
        </div>

        <div class="form-group">
          <label for="body">Articolo</label>
          <textarea class="form-control" name="body" id="body" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Invia</button>
    </form>
    

@endsection