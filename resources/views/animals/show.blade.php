@extends('layouts.app')

@section('page-title', "animal")

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center p-5">
            <h1>
                Animal index
            </h1>
        </div>
    </div>
    <div class="row">
            <article class="col-3">
                <h2>
                    {{ $animal->name}}
                </h2>
                <p>
                    tipo: {{ $animal->species }}
                </p>
                <p>
                    età: {{ $animal->age }} anni
                </p>

                <a href="{{ route('animals.edit', $animal->id) }}">Modifica</a>

                <form action="{{ route('animals.destroy', $animal->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Sei sicuro di voler cancellare questo animale?')">Cancella</button>
                </form>

                <a href="{{ route('animals.index', $animal)}}">Torna indietro</a>
            </article>
    </div>
</div>
@endsection
