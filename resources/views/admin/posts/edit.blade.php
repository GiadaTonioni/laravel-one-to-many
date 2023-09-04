@extends('layouts.admin')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="fw-bold">Modifica "{{ $post->title }}"</h2>
                    <a href="{{ Route('admin.posts.index') }}" class="btn btn-danger">Back</a>
                </div>
            </div>
            <div class="col-12 mb-5">
                <form action=" {{ Route('admin.posts.update', $post->id) }} " method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group border p-4">
                        <div class="row">
                            <div class="col-12 my-2">
                                <!-- Titolo -->
                                <label class="control-label my-2">Titolo</label>
                                <input type="text" name="title" id="title" placeholder="Inserisci il titolo"
                                    class="form-control" value="{{ old('title') ?? $post->title }}" required>
                            </div>
                            <div class="col-12 my-2">
                                <!-- Content -->
                                <label class="control-label my-2">Content</label>
                                <textarea name="content" id="content" placeholder="Inserisci la descrizione" cols="30" rows="10"
                                    class="form-control" required>{{ old('content') ?? $post->content }}</textarea>
                            </div>
                            <div class="col-12 my-2">
                                <!-- Slug -->
                                <label class="control-label my-2">Slug</label>
                                <input type="text" name="slug" id="slug" placeholder="Inserisci la slug"
                                    class="form-control" value="{{ old('slug') ?? $post->slug }}" required>
                            </div>
                            <div class="col-12 my-2">
                                <!-- Select -->
                                <div class="form-group mt-4">
                                    <label class="control-lable">Tipologia</label>
                                    <select name="category_id" id="category_id" class="form-control">
                                        <option value="">Seleziona tipologia</option>
                                        @foreach ($types as $type)
                                            <option
                                                {{ $type->id == old('category_id', $post->category_id) ? 'selected' : '' }}
                                                value="{{ $type->id }}">{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 text-center my-5">
                                    <!-- Submit Button -->
                                    <button type="submit" class="btn btn-success">Modifica</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
