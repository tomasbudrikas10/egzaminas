@extends('base')

@section('content')
    <h1 class="text-5xl">Autoservice Experts</h1>
    <div>
        @foreach ($experts as $expert)
            <div>
                <p class="text-center text-2xl font-bold">{{ $expert->name }} {{ $expert->lastname }}</p>
                <span class="text-md text-gray-700">{{ $expert->specialization->specialization }}</span>
                <p class="text-lg text-center">{{ $expert->autoservice->autoservice }}</p>
            </div>
        @endforeach
    </div>
@endsection