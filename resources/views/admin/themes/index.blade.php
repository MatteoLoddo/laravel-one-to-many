@extends('layouts.admin')
@section('page_title', 'Lista temi')
@section('page_content')
    <div class="container">
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Titolo</th>
                <th>Versione</th>
                <th>Ultimo Aggiornameto</th>
            </thead>
            <tbody>
                @foreach ($themes as $theme)
                    <tr>
                        <th scope="row">{{ $theme->id }}</th>
                        <td>{{ $theme->title }}</td>
                        <td>{{ $theme->sistem_version }}</td>
                        <td>{{ $theme->updating_date }}</td>
                        {{-- pulsante SHOW --}}
                        <td>
                            <a class="" href="{{ route('admin.themes.show', $theme->id) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path
                                        d="M279.6 160.4C282.4 160.1 285.2 160 288 160C341 160 384 202.1 384 256C384 309 341 352 288 352C234.1 352 192 309 192 256C192 253.2 192.1 250.4 192.4 247.6C201.7 252.1 212.5 256 224 256C259.3 256 288 227.3 288 192C288 180.5 284.1 169.7 279.6 160.4zM480.6 112.6C527.4 156 558.7 207.1 573.5 243.7C576.8 251.6 576.8 260.4 573.5 268.3C558.7 304 527.4 355.1 480.6 399.4C433.5 443.2 368.8 480 288 480C207.2 480 142.5 443.2 95.42 399.4C48.62 355.1 17.34 304 2.461 268.3C-.8205 260.4-.8205 251.6 2.461 243.7C17.34 207.1 48.62 156 95.42 112.6C142.5 68.84 207.2 32 288 32C368.8 32 433.5 68.84 480.6 112.6V112.6zM288 112C208.5 112 144 176.5 144 256C144 335.5 208.5 400 288 400C367.5 400 432 335.5 432 256C432 176.5 367.5 112 288 112z" />
                                </svg>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('admin.themes.edit', $theme->id) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M421.7 220.3L188.5 453.4L154.6 419.5L158.1 416H112C103.2 416 96 408.8 96 400V353.9L92.51 357.4C87.78 362.2 84.31 368 82.42 374.4L59.44 452.6L137.6 429.6C143.1 427.7 149.8 424.2 154.6 419.5L188.5 453.4C178.1 463.8 165.2 471.5 151.1 475.6L30.77 511C22.35 513.5 13.24 511.2 7.03 504.1C.8198 498.8-1.502 489.7 .976 481.2L36.37 360.9C40.53 346.8 48.16 333.9 58.57 323.5L291.7 90.34L421.7 220.3zM492.7 58.75C517.7 83.74 517.7 124.3 492.7 149.3L444.3 197.7L314.3 67.72L362.7 19.32C387.7-5.678 428.3-5.678 453.3 19.32L492.7 58.75z" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- pulsante CREATE --}}
        <div class="text-center">
            <a class="btn btn-warning" href="{{ route('admin.themes.create') }}">
                Aggiungi
            </a>
        </div>

    </div>
@endsection
