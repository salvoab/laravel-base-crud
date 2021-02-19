@extends('layouts.app')

@section('title')
    Scrivi un post
@endsection

@section('content')

  <div class="jumbotron">
    <h1>{{$post->title}}</h1>
    <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-primary">Modifica questo post</a>
  </div>  
    
  <p>{{$post->body}}</p>
    

@endsection