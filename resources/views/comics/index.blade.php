@extends('layouts.app')


@section('content')
    <div class="container">

    <h1 class="text-center">
        COMICS LIST
    </h1>

    {{-- CREATE --}}
    <a href=" {{ route('comics.create') }} " class="btn btn-success mb-3">
        Aggiungi un nuovo comic
    </a>


        <div class="row">
            <div class="col">

                @foreach ($comics as $comic)
                <div class="card">
                    <div class="card-body">
                    {{ $comic->series }}

                    {{-- READ --}}
                    <a href=" {{ route('comics.show', $comic->id) }} " class="btn btn-primary">
                        Mostra
                    </a>

                    {{-- UPDATE --}}
                    <a href=" {{ route('comics.show', $comic->id) }} " class="btn btn-warning">
                        Aggiorna
                    </a>

                    {{-- DELETE --}}
                    <a href=" {{ route('comics.show', $comic->id) }} " class="btn btn-danger">
                        Elimina
                    </a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </div>
@endsection