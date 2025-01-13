<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Home</h1>
    <a href="{{route('homepage')}}">Home</a>
    <a href="{{route('contacts')}}">Contatti</a>
    <a href="{{route('articles')}}">Articoli</a>
    <a href="{{route('recipes')}}">Ricette</a>

    <a href="{{route('test',['parB'=>'Ciao ','parA'=>'Pippo'])}}">TestRoute</a>
</body>
</html>