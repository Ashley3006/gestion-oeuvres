@extends('layout.admin')
@section('content')
    <h1 style="text-align: center; color: blue;">Formulaire pour modifier titre d'un Articles ou d'Catégorie</h1>
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @dump($errors)
        <form method="POST" action="{{ route('admin.articles.modifier_traitement', $article->id) }}">
            @csrf
            <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                <div class="col-12">
                    <label for="titre" class="form-label">Titre de l'article<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="titre" name="titre"
                        value="{{ old('titre', $article->titre) }}" required>
                    @error('titre')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                <div class="col-12">
                    <label for="image" class="form-label">Image <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="image" name="image"
                    value="{{ old('image', $article->image) }}" required>
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                <div class="col-12">
                    <label for="resume" class="form-label">Resume <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="resume" name="resume"
                    value="{{ old('resume', $article->resume) }}" required>
                    @error('resume')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                <div class="col-12">
                    <label for="categorie_id" class="form-label">Categorie <span class="text-danger">*</span></label>
                    <select name="categorie_id" class="form-control form-select" id="categorie_id">
                        <option value="{{ old('categorie_id', $article->categorie_id) }}" selected>Selectionner une catégorie</option>
                        @foreach ($categories as $categorie)
                            <option value="{{ $categorie->id }}">{{ $categorie->titre }}</option>
                        @endforeach
                    </select>
                    @error('categorie_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                <textarea class="form-control" id="description" name="description" rows="3" cols="40"
                value="{{ old('description', $article->description) }}" required></textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                <div class="col-12">
                    <label for="tags" class="form-label">Tags <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="tags" name="tags"
                    value="{{ old('tags', $article->tags) }}" required>
                    @error('tags')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="d-grid">
                    <button class="btn btn-primary btn-lg" type="submit">Modifier</button>
                </div>
            </div>
        </form>
    </div>
@endsection
