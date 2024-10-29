@extends('layouts.app')

@section('page-title', 'Crea nuovo progetto')

@section('main-content')
    <div class="row">
        <div class="col">
            <h1 class="text-center text-success mb-3">
                Inserisci nuovo progetto
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
              <form action="{{ route('admin.projects.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="title" class="form-label">Titolo</label>
                  <input
                    type="text"
                    class="form-control"
                    id="title"
                    name="title"
                    required
                    placeholder="Inserisci il titolo...">
                </div>
                <div class="mb-3">
                  <label for="url" class="form-label">Url</label>
                  <input
                    type="text"
                    class="form-control"
                    id="url"
                    name="url"
                    placeholder="Inserisci il link al progetto...">
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label">Descrizione</label>
                  <textarea 
                    type="text"
                    class="form-control"
                    id="description"
                    name="description"
                    placeholder="Inserisci la descrizione..."></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">+ Aggiungi</button>
              </form> 
            </div>
        </div>
    </div>
@endsection
