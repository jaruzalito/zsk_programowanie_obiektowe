<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Uzytkownik</h3>
    {{-- {{print_r($user)}}<br>
    {{print_r($user['hobby'][0])}}<br> --}}
    imie i nazwisko: {{$user['firstName']}} {{$user['lastName']}}<br>
    Miasto: {{$user['city']}}
    Hobby: <ul>
        @foreach ($user['hobby'] as $hobby)
            <li>{{$hobby}}</li>
        @endforeach
</body>
</html>
