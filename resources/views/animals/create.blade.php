@extends('layouts.app')

@section('page-title', 'Animal create')

@section('main-content')
<form action="{{ route('animals.store') }}" method="POST">
    @csrf
    <label for="name">Nome:</label>
    <input type="text" id="name" name="name" value="{{ old('name') }}" required>
    <br>

    <label for="species">Specie:</label>
    <input type="text" id="species" name="species" value="{{ old('species') }}" required>
    <br>

    <label for="age">Età:</label>
    <input type="number" id="age" name="age" value="{{ old('age') }}" required>
    <br>

    <button type="submit">Salva</button>
</form>

<a href="{{ route('animals.index') }}">Torna alla lista degli animali</a>
@endsection
