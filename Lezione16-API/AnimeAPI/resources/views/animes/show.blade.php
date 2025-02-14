<x-layout>
    {{-- @dd($data) --}}
    <img src="{{$data['images']['jpg']['large_image_url']}}" alt="" class="img-fluid">
    <h1>{{$data['title']}}</h1>
    <h2> {{$data['year']}} - {{$data['score']}}</h2>
    <p>{!! nl2br(e($data['synopsis'])) !!}</p>

</x-layout>