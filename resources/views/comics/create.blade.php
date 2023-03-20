@extends('layouts.app')


@section('content')

<div class="container">

    <h1>
        Aggiungi un nuovo comic
    </h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>

            @foreach ($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach

        </ul>
    </div>
    @endif
        
    <form action="{{ route('comics.store') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo *</label>
            <input 
            type="text" 
            class="form-control" 
            name="title"
            id="title"
            placeholder="Titolo"
            min="3"
            required>
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Serie *</label>
            <input 
            type="text" 
            class="form-control" 
            name="series"
            id="series"
            placeholder="Serie"
            min="3"
            required
            >
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di rilascio</label>
            <input 
            type="text" 
            class="form-control" 
            name="sale_date"
            id="sale_date"
            placeholder="Data di rilascio"
            >
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipo *</label>
            <input 
            type="text" 
            class="form-control" 
            name="type"
            id="type"
            placeholder="Tipo"
            min="3"
            max="200"
            required>
        </div>

        

        <button type="submit" class="btn btn-success">
            Aggiungi
        </button>

        </form>

    
</div>     
@endsection