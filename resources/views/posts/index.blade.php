@extends('layouts.app')

@section('title')
    Posts
@endsection

@section('content')
    <div class="jumbotron">
        <h1 class="display-3">Tutti i post del blog</h1>
        <p class="lead">Un elenco di tutti i post scritti in questo blog</p>
        <a class="btn btn-primary" href="{{ route('posts.create') }}" role="button">Scrivi un post</a>
    </div>
    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titolo</th>
                <th>Articolo</th>
                <th>Azione</th>
            </tr>
        </thead>
        <tbody>
            @foreach($all_posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td class="d-flex justify-content-between"> 
                        <a class="btn btn-primary" href="{{ route('posts.show', ['post' => $post->id]) }}">
                            <i class="fas fa-eye fa-lg fa-fw"></i> Visualizza
                        </a>
                        <a class="btn btn-secondary" href="{{ route('posts.edit', ['post' => $post->id]) }}">
                            <i class="fas fa-pen fa-lg fa-fw"></i> Modifica
                        </a>
                        <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash fa-lg fa-fw"></i>Cancella</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection