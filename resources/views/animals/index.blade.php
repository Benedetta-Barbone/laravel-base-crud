@extends('layouts.app')

@section('page-title', 'Animal index')

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
            @foreach ($animals as $animal )
                <article class="col-3">
                    <h2>
                        {{ $animal->name}}
                    </h2>
                    <a href="{{ route('animals.show', $animal)}}">Animal details</a>
                    <a href="{{ route('animals.edit', $animal->id) }}">Modifica</a>
                |
                <form action="{{ route('animals.destroy', $animal->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Sei sicuro di voler cancellare questo animale?')">Cancella</button>
                </form>
                </article>

            @endforeach
        </div>
    </div>
@endsection
