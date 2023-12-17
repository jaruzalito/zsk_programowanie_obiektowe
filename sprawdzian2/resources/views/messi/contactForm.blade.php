<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{Route('seks.store')}}" method="POST">
        @csrf
        <label  for="">
            <input type="text" name="name" placeholder="imie" value="{{old('name')}}" autofocus>
            @error('name')
            {{$message}}
            @enderror
        </label>
        <label  for="">
        <input type="email" name="email" placeholder="email" value="{{old('email')}}">
            @error('email')
            {{$message}}
            @enderror
        </label>
        <label  for="">
        <input type="email" name="emailConf" id="" placeholder="email powtorz" value="{{old('emailConf')}}">
            @error('emailConf')
            {{$message}}
            @enderror
        </label>
        <input type="submit" value="submit">
        <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
    </form>
</body>
</html>
