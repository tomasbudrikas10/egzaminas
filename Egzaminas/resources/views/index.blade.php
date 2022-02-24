@extends('base')

@section('content')
    <h1 class="text-5xl text-center">Autoservice Experts</h1>
    <div>
        @foreach ($experts as $expert)
            <div>
                <p class="text-center text-2xl font-bold">{{ $expert->name }} {{ $expert->lastname }}</p>
                <span class="text-md text-gray-700">{{ $expert->specialization->name }}</span>
                <p class="text-lg text-center pt-5">{{ $expert->autoservice->name }}</p>
            </div>
        @endforeach
    </div>
@endsection