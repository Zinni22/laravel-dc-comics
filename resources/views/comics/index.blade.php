@extends('layouts.app')


@section('content')
    <div class="container">

    <h1 class="text-center">
        COMICS LIST
    </h1>

        <div class="row">
            <div class="col">

                @foreach ($comics as $comic)
                <div class="card">
                    <div class="card-body">
                    {{ $comic->series }}

                    <a href=" {{ route('comics.show', $comic->id) }} " class="btn btn-primary">
                        Mostra
                    </a>

                    <a href=" {{ route('comics.show', $comic->id) }} " class="btn btn-warning">
                        Aggiorna
                    </a>

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