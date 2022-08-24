@extends('layouts.admin')
@section('page_title' ,'Modifica tema')
@section('page_content')
    <div class="container">
        <form action="{{ route('admin.themes.update',"$theme->id") }}" method="post">
            @csrf
            {{-- per edit aggiungiamo il metodo --}}
            @method('PUT')
            {{-- form TITOLO --}}
            <div class="mb-3">
                <label for="titleInput" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title"
                    id="titleInput" value="{{ $theme->title }}">
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="row">

                {{-- VERSIONE --}}
                <div class="col">
                    <div class="mb-3">
                        <label for="sistem_version" class="form-label">Versione</label>
                        <input type="number" class="form-control" name="sistem_version" id="sistem_version"
                            value="{{ $theme->sistem_version }}">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                </div>

                {{-- FORM ULTIMO AGGIORNAMENTO --}}
                <div class="col">
                    <div class="mb-3">
                        <label for="updating_date" class="form-label">Ultimo aggiornamento</label>
                        <input type="date" class="form-control" name="updating_date" value="{{ $theme->updating_date }}">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                </div>
                {{-- form LINK-IMAGE --}}
                <div class="col">
                    <div class="mb-3">
                        <label for="image_url" class="form-label">URL immagine</label>
                        <input type="text" class="form-control" name="image_url" value="{{$theme->image_url }}">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                </div>
            </div>
            {{-- form DESCRIZIONE --}}

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{$theme->description}}</textarea>
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
