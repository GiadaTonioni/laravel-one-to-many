@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h1>I POST</h1>
                <div class="btn-container">
                        <a href="{{ Route('admin.posts.create') }}"><button class="btn btn-secondary">Crea
                        progetto</button></a>
                </div>
            </div>
            <div class=col-12 mt-5>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titolo</th>
                            <th>Slug</th>
                            <th>Strumenti</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->slug}}</td>
                                <td>
                                    <a href="{{ Route('admin.posts.show', $post->id) }}" class="btn btn-sm btn-primary">
                                        <i class="fas fa-eye"></i>
                                        <p>mostra</p>
                                    </a>
                                    <a href="{{ Route('admin.posts.edit', $post->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                        <p>edit</p>
                                    </a>
                                    <form method="POST" action="{{ Route('admin.posts.destroy', $post) }}" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                            <p>delete</p>
                                        </button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection