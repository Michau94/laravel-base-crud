@extends ('layouts.main_layout')

@section('title', 'Aggiungi Fumetto')

@section('content')

    <h1>Aggiungi Nuovo Fumetto</h1>
    <hr>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif


    @include('includes.form', compact('comic'))

@endsection
