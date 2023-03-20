@extends('layouts.app')


@section('content')

<div class="container">

    <h1>
        Aggiorna un comic
    </h1>
        
    <form action="{{ route('comics.update', $comics->id) }}" method="post">
        @csrf

        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo *</label>
            <input 
            type="text" 
            class="form-control" 
            name="title"
            id="title"
            placeholder="Titolo"
            value="{{ $comics->title }}"
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
            value="{{ $comics->series }}"
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
            value="{{ $comics->sale_date }}"
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
            value="{{ $comics->type }}"
            required>
        </div>

        

        <button type="submit" class="btn btn-warning">
            Aggiorna
        </button>

        </form>

    
</div>     
@endsection