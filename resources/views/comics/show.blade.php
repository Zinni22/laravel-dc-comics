@extends('layouts.app')


@section('content')

<div class="container">
    <div class="card-body">
        <h3>
            {{ $comics->title }}
        </h3>

        <ul>
            <li>
                <strong>Series:</strong>
                {{ $comics->series }}
            </li>

            <li>
                <strong>Sale Date:</strong>
                {{ $comics->sale_date }}
            </li>

            <li>
                <strong>Type:</strong>
                {{ $comics->type }}
            </li>
        </ul>
    </div>

    <a href=" {{ route('comics.index') }} " class="btn btn-primary">
        Torna alla home
    </a>
</div>     
@endsection