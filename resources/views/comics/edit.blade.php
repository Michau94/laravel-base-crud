@extends('layouts.main_layout')

@section('title', 'Modifica fumetto')


@section('content')

    <h1>Modifica Fumetto</h1>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    @include('includes.form');


@endsection
