@extends('layouts.app')

@section('page-title', 'Index')

@section('main-content')
    <div class="row">
        <div class="col">
            <h1 class="text-center text-success mb-3">
                Projects index
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Slug</th>
                        <th scope="col">url</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Azioni</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($projects as $project)
                      <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->slug }}</td>
                        <td>{{ $project->url }}</td>
                        <td>{{ $project->description }}</td>
                        <td>
                            <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-primary">Vedi</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
