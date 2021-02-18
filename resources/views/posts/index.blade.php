@extends('layouts.app')

@section('title')
    Posts
@endsection

@section('content')
    <div class="jumbotron">
        <h1 class="display-3">Tutti i post del blog</h1>
        <p class="lead">Un elenco di tutti i post scritti in questo blog</p>
    </div>
    
    <div class="container">
        <div class="row justify-content-start">
        @foreach($all_posts as $post)
            <div class="col-4">
      
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ $post->title }}</h4>
                        <p class="card-text">{{ $post->body }}</p>
                    </div>
                </div>
            
            </div>
        @endforeach    
    </div>

@endsection