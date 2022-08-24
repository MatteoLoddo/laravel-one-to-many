@extends('layouts.admin')
@section('page_title', 'Crea tema')
@section('page_content')
    <div class="container">
        <form action="{{ route('admin.themes.store') }}" method="post">
            @csrf
            {{-- form TITOLO --}}

            <div class="mb-3">
                <label for="titleInput" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" id="titleInput" value="{{ old('title') }}">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            <ul>
                    </div>
                @endif
            </div>
            <div class="row">

                {{-- VERSIONE --}}
                <div class="col">
                    <div class="mb-3">
                        <label for="sistem_version" class="form-label">Versione</label>
                        <input type="number" class="form-control" name="sistem_version" id="sistem_version"
                            value="{{ old('sistem_version') }}">
                        <div class="invalid-feedback">

                        </div>
                    </div>
                </div>

                {{-- FORM ULTIMO AGGIORNAMENTO --}}
                <div class="col">
                    <div class="mb-3">
                        <label for="updating_date" class="form-label">Ultimo aggiornamento</label>
                        <input type="date" class="form-control" name="updating_date" value="{{ old('updating_date') }}">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                </div>
                {{-- form LINK-IMAGE --}}
                <div class="col">
                    <div class="mb-3">
                        <label for="image_url" class="form-label">URL immagine</label>
                        <input type="text" class="form-control" name="image_url" value="{{ old('image_url') }}">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                </div>
            </div>
            {{-- form DESCRIZIONE --}}

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control p-0" name="description" id="description" cols="30" rows="10">
                {{-- tenere in memoria i dati in caso di errore --}}{!! old('description') !!}
                </textarea>
                <div class="invalid-feedback">
                </div>
            </div>

            {{-- button SUBMIT --}}
            <button class='btn btn-success'type="submit">Aggiungi</button>
            {{-- button ANNULLA --}}
            <a class="btn btn-danger " href="{{ route('admin.themes.index') }}">Annulla</a>

        </form>
    </div>

@endsection
