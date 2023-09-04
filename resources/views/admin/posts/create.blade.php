@extends('layouts.admin')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="fw-bold">Crea il tuo progetto</h2>
                    <a href="{{ Route('admin.posts.index') }}" class="btn btn-danger">Back</a>
                </div>
            </div>
            <div class="col-12 mb-5">
                <form action=" {{ Route('admin.posts.store') }} " method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group border p-4">
                        <div class="row">
                            <div class="col-12 my-2">
                                <!-- Titolo -->
                                <label class="control-label my-2">Titolo</label>
                                <input type="text" name="title" id="title" placeholder="Inserisci il titolo"
                                    class="form-control" required>
                            </div>
                            <div class="col-12 my-2">
                                <!-- Content -->
                                <label class="control-label my-2">Content</label>
                                <textarea name="content" id="content" placeholder="Inserisci la descrizione" cols="30" rows="10"
                                    class="form-control" required></textarea>
                            </div>
                            <div class="col-12 my-2">
                                <!-- Slug -->
                                <label class="control-label my-2">Slug</label>
                                <input type="text" name="slug" id="slug" placeholder="Inserisci la slug"
                                    class="form-control" required>
                            </div>
                            <!-- Select -->
                            <div class="form-group mt-4">
                                <label class="control-lable">Tipologia</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    <option value="">Seleziona tipologia</option>
                                    @foreach ($types as $type)
                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12 text-center my-5">
                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-success">Crea</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection