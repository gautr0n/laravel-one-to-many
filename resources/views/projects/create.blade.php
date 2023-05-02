@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <h1>Nuovo Progetto</h1>
    </div>
    <div class="container">
        <form action="{{ route('projects.store') }}" method="POST">
            @csrf 
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" 
                    value="{{ old('title') }}" id="title" aria-describedby="titleHelp">

                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type_id" class="form-label">Tipo</label>
                <select name="type_id" class="form-select @error('type_id') is-invalid @enderror" id="type_id" aria-label="Default select example">
                    <option value="" selected>Selezione Categoria</option>
                    @foreach ($types as $type)
                        <option @selected(old('type_id')== $type->id)  value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
                @error('type_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="website_link" class="form_label">Link Sito</label>
                <input type="text" name="website_link" class="form-control @error('website_link') is-invalid @enderror" value="{{ old('website_link') }}" id="website_link" aria-describedby="titleHelp">
                @error('website_link')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror">{{old('description')}}</textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{message}}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Crea</button>
        </form>
    </div>
@endsection