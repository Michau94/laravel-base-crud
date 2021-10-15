 @if ($comic->exists)
     <form action="{{ route('comics.update', compact('comic')) }}" method="POST">
         @csrf
         @method('PATCH')
     @else

         <form action="{{ route('comics.store') }}" method="POST">

 @endif
 @csrf

 <div class="d-flex">
     <div class="formfill">
         <label for="title">Title</label>
         <input type="text" id="title" name="name" value="{{ old('name', $comic->name) }}">
     </div>
     <div class="formfill">
         <label for="description">Description</label>
         <textarea type="text" id="description"
             name="description">{{ old('description', $comic->description) }}</textarea>
     </div>
     <div class="formfill">
         <label for="Thumb">Copertina</label>
         <input type="text" id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
     </div>
     <div class="formfill">
         <label for="Price">Price</label>
         <input type="number" id="price" name="price" value="{{ old('price', $comic->price) }}">
     </div>
     <div class="formfill">
         <label for="series">Series</label>
         <input type="text" id="series" name="series" value="{{ old('series', $comic->series) }}">
     </div>
     <div class="formfill">
         <label for="sales_date">Sales Date</label>
         <input type="date" id="sales_date" name="sales_date" value="{{ old('sales_date', $comic->sales_date) }}">
     </div>
     <div class="formfill">
         <label for="type">Type</label>
         <input type="text" id="type" name="type" value="{{ old('type', $comic->type) }}">
     </div>
 </div>

 <button type="submit" class="button">Submit</button>

 </form>
