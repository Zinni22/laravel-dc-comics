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
            <div class="col mb-5">

                @foreach ($comics as $comic)
                <div class="card">
                    <div class="card-body d-flex justify-content-between">

                    {{ $comic->series }}

                    <div class="d-flex">
                        {{-- READ --}}
                        <a href=" {{ route('comics.show', $comic->id) }} " class="btn btn-primary">
                            Mostra
                        </a>

                        {{-- UPDATE --}}
                        <a href=" {{ route('comics.edit', $comic->id) }} " class="btn btn-warning mx-2">
                            Aggiorna
                        </a>

                        {{-- DELETE --}}
                        <form onsubmit="return confirm('Sei sicuro di voler eliminare questo comic?');" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">
                                Elimina
                            </button>

                        </form>
                    </div>

                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </div>
@endsection