@extends('layouts.app')

@section('page-title', 'Dettagli progetto')

@section('main-content')
    <div class="row">
        <div class="col">
            <h1 class="text-center text-success mb-3">
                {{ $project->title }}
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                  <li>
                    Titolo: {{ $project->title }}
                  </li>
                  <li>
                    Slug: {{ $project->slug }}
                  </li>
                  <li>
                    Link: {{ $project->url }}
                  </li>
                  <li>
                    Descrizione: {{ $project->description }}
                  </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
