@extends('layouts.app')

@section('title')
    Scrivi un post
@endsection

@section('content')
    
  <h1>{{$post->title}}</h1>
    
  <p>{{$post->body}}</p>
    

@endsection