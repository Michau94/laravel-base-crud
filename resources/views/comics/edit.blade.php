@extends('layouts.main_layout')

@section('title', 'Modifica fumetto')


@section('content')

    <h1>Modifica Fumetto</h1>

    <form action="{{ route('comics.update', compact('comic')) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="d-flex">
            <div class="formfill">
                <label for="title">Title</label>
                <input type="text" id="title" name="name" value="{{ $comic->name }}">
            </div>
            <div class="formfill">
                <label for="description">Description</label>
                <textarea type="text" id="description" name="description">{{ $comic->description }}</textarea>
            </div>
            <div class="formfill">
                <label for="Thumb">Copertina</label>
                <input type="text" id="thumb" name="thumb" value="{{ $comic->thumb }}">
            </div>
            <div class="formfill">
                <label for="Price">Price</label>
                <input type="number" id="price" name="price" value="{{ $comic->price }}">
            </div>
            <div class="formfill">
                <label for="series">Series</label>
                <input type="text" id="series" name="series" value="{{ $comic->series }}">
            </div>
            <div class="formfill">
                <label for="sales_date">Sales Date</label>
                <input type="text" id="sales_date" name="sales_date" value="{{ $comic->sales_date }}">
            </div>
            <div class="formfill">
                <label for="type">Type</label>
                <input type="text" id="type" name="type" value="{{ $comic->type }}">
            </div>
        </div>

        <button type="submit" class="button">Submit</button>







    </form>

@endsection
