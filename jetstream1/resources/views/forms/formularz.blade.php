<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="FormController" method="get">
        <input type="text" name="imie" id="imie" placeholder="podaj imie" value="{{old('imie')}}" autofocus>@error('imie'){{$message}}@enderror
            <br>
        <input type="text" name="nazwisko" id="nazwisko" placeholder="podaj nazwisko" value="{{old('nazwisko')}}">@error('nazwisko'){{$message}}@enderror<br>
        <input type="text" name="email" id="email" placeholder="podaj emial" value="{{old('email')}}">@error('email'){{$message}}@enderror<br>
        <input type="submit" value="zatwierdz">
    </form>

















    <!--<form action="UserFormController" method="get">
        <input type="text" name="firstName" placeholder="Podaj imie" autofocus><br><br>
        <input type="text" name="lastName" placeholder="Podaj Nazwisko">
        <input type=submit value="Zatwierdz dane">
    -->
    </body>
</html>
