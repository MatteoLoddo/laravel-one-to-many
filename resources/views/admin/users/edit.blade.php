@extends('layouts.admin')
@section('page_title' ,'Modifica tema')
@section('page_content')
    <div class="container">
        <form action="{{ route('admin.users.update',"$user->id") }}" method="post">
            @csrf
            {{-- per edit aggiungiamo il metodo --}}
            @method('PUT')
            {{-- form NOME --}}
            <div class="mb-3">
                <label for="titleInput" class="form-label">Nome</label>
                <input type="text" class="form-control" name="name"
                    id="titleInput" value="{{ $user->name }}">
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="row">

                {{-- CITTA --}}
                <div class="col">
                    <div class="mb-3">
                        <label for="city" class="form-label">Citta</label>
                        <input type="text" class="form-control" name="city" id="city"
                            value="{{ $user->city }}">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                </div>

                {{-- PROVINCIA --}}
                <div class="col">
                    <div class="mb-3">
                        <label for="province" class="form-label">Provincia</label>
                        <input type="text" class="form-control" name="province" value="{{ $user->province }}">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                </div>
                {{-- form LINK-IMAGE --}}
                <div class="col">
                    <div class="mb-3">
                        <label for="phone" class="form-label">Numero telefono</label>
                        <input type="number" class="form-control" name="phone" value="{{$user->phone }}">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                </div>

                {{-- ADDRESS --}}
                <div class="col">
                    <div class="mb-3">
                        <label for="address" class="form-label">address</label>
                        <input type="text" class="form-control" name="address" id="address"
                            value="{{ $user->address }}">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                </div>
            </div>
            {{-- button SUBMIT --}}
            <button class='btn btn-success'type="submit">Aggiungi</button>
            {{-- button ANNULLA --}}
            <a class="btn btn-danger " href="{{ route('admin.users.index') }}">Annulla</a>

        </form>
    </div>

@endsection
