<h3>dodawanie</h3>
<div>
    hej {{$imie}}
    <form action="{{route('product.store')}}" method="post">
        @csrf
        <div>
            <input type="text" name="name" id="name" value="{{old('name')}}">
            @error('name')
            <div>{{$message}}</div>
            @enderror
        </div>
        <br>
        <div>
            <input type="number" name="price" id="price" value="{{old('price')}}">
            @error('price')
            <div>{{$message}}</div>
            @enderror
        </div>
        <br>
        <div>
            <textarea name="description" id="description" value="{{old('description')}}"></textarea>
            @error('description')
            <div>{{$message}}</div>
            @enderror
        </div>
        <button type="submit">Dodaj produkt</button>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach

    </form>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
</div>
