<h3>Dodawanie produktu</h3>
<div>
    <form action="{{route('product.store')}}" method="post">
        @csrf
        <input type="submit" value="potwierdź">
</div>
