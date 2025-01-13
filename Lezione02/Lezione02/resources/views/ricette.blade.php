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
    <a href="{{ route('homepage') }}">Home</a>
    <a href="{{ route('contacts') }}">Contatti</a>
    <a href="{{ route('articles') }}">Articoli</a>

    <div>

        @foreach($ricette as $titolo=>$ricetta)
            <li><a href="{{route('recipe.show',$titolo)}}">{{$titolo}}</a></li>
        @endforeach

    </div>
</body>

</html>
