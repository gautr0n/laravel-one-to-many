@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="d-flex alig-items-center">
            <h1 class="me-auto">Tutti i progetti</h1>

            <div>
                <a class="btn btn-sm btn-primary" href="{{ route('projects.create') }}">Nuovo Progetto</a>
            </div>
        </div>
    </div>

    <div class="container">
        <table class="table table-stripped table-inverse table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>title</th>
                    <th>description</th>
                    <th>link</th>
                    <th>slug</th>
                    <th>data creazione</th>
                    <th>data modifica</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>
                            <a href="{{ route('projects.show', $project) }}">{{ $project->title }}</a>
                        </td>
                        <td>{{ $project->descriptiom }}</td>
                        <td>{{ $project->website_link}}</td>
                        <td>{{ $project->slug }}</td>
                        <td>{{ $project->created_at }}</td>
                        <td>{{ $project->updated_at }}</td>
                        <td>
                            <div class="d-flex">
                                <a class="btn btn-sm btn-secondary" href="{{ route('projects.edit', $project) }}">Edit</a>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <th colspan="8">nessun progetto trovato</th>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection