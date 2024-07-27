@extends('layouts.app')

@section('page-title', 'Animal create')

@section('main-content')

@if (session('success'))
<p style="color: green;">{{ session('success') }}</p>
@endif

@if ($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $error)
            <li style="color: red;">{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('animals.store') }}" method="POST">
    @csrf

    <label for="id">id:</label>
    <input type="text" id="id" name="id" value="{{ old('id') }}" required>
    <br>

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
