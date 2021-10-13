@extends ('layouts.main_layout')

@section('title', 'Aggiungi Fumetto')

@section('content')

    <h1>Aggiungi Nuovo Fumetto</h1>

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf




    </form>

@endsection
