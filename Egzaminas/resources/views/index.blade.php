@extends('base')

@section('content')
    <h1 class="text-5xl text-center">Autoservice Experts</h1>
    <div class="grid grid-cols-3 gap-2">
        @foreach ($experts as $expert)
            <div class="mx-auto">
                <img src="#" alt="Image goes here." class="w-52 h-52">
                <p class="text-center text-2xl font-bold">{{ $expert->name }} {{ $expert->lastname }}</p>
                <span class="text-md text-gray-700 text-center">{{ $expert->specialization->name }}</span>
                <p class="text-lg text-center pt-5">{{ $expert->autoservice->name }}</p>
            </div>
        @endforeach
    </div>
@endsection