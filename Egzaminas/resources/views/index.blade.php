@extends('base')

@section('content')
    <h1 class="text-5xl text-center">Autoservice Experts</h1>
    <div class="grid grid-cols-3 gap-2 p-16">
        @foreach ($experts as $expert)
            <div class="mx-auto">
                <p>Rating: {{ $expert->rating->rating }}</p>
                <a href="/click/{{ $expert->id }}"><p class="text-3xl text-right">♥</p></a>
                <img src="#" alt="Image goes here." class="h-52 mx-auto">
                <p class="text-center text-2xl font-bold">{{ $expert->name }} {{ $expert->lastname }}</p>
                <p class="text-lg text-center">{{ $expert->city }}</p>
                <p class="text-md text-gray-700 text-center">{{ $expert->specialization->name }}</p>
                <p class="text-lg text-center pt-5">{{ $expert->autoservice->name }}</p>
            </div>
        @endforeach
    </div>
@endsection