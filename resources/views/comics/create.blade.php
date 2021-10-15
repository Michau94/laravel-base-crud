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

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="d-flex">
            <div class="formfill">
                <label for="title">Title</label>
                <input type="text" id="title" name="name" value="{{ old('name', $team->name) }}">
            </div>
            <div class="formfill">
                <label for="description">Description</label>
                <textarea type="text" id="description" name="description"></textarea>
            </div>
            <div class="formfill">
                <label for="Thumb">Copertina</label>
                <input type="text" id="thumb" name="thumb">
            </div>
            <div class="formfill">
                <label for="Price">Price</label>
                <input type="text" id="price" name="price">
            </div>
            <div class="formfill">
                <label for="series">Series</label>
                <input type="text" id="series" name="series">
            </div>
            <div class="formfill">
                <label for="sales_date">Sales Date</label>
                <input type="text" id="sales_date" name="sales_date">
            </div>
            <div class="formfill">
                <label for="type">Type</label>
                <input type="text" id="type" name="type">
            </div>
        </div>

        <button type="submit" class="button">Submit</button>







    </form>

@endsection
