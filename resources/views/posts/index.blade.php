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
                <th>Estratto dell'Articolo</th>
                <th>Azione</th>
            </tr>
        </thead>
        <tbody>
            @foreach($all_posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td class="body-preview">{{ $post->body }}</td>
                    <td class="d-flex justify-content-between"> 
                        <a class="btn btn-primary" href="{{ route('posts.show', ['post' => $post->id]) }}">
                            <i class="fas fa-eye fa-lg fa-fw"></i> Visualizza
                        </a>
                        <a class="btn btn-secondary" href="{{ route('posts.edit', ['post' => $post->id]) }}">
                            <i class="fas fa-pen fa-lg fa-fw"></i> Modifica
                        </a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-modal-{{ $post->id }}">
                            <i class="fas fa-trash fa-lg fa-fw"></i> Cancella
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="delete-modal-{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitle-{{ $post->id }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Cancella Definitivamente il Post</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Sei sicuro di voler cancellare definitivamente il post con<br>ID: {{ $post->id }} e TITOLO: '{{ $post->title }}' ?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
                                        
                                        <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash fa-lg fa-fw"></i>Cancella</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection