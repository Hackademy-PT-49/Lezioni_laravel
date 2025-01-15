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
        <h1>{{$title ?? 'Titolo default'}}</h1>
        
        @foreach ($articoli as $articolo)
            @if ($articolo['approvato']==true)
               <a href="{{route('article.detail',$articolo['id'])}}"> <p>{{ $articolo['titolo'] }}</p></a>
            @endif
        @endforeach

       {{--commento in blade
       
       
       
       --}}

    </div>
</body>

</html>
