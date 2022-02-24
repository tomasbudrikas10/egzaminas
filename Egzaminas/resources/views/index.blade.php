@extends('base')

@section('content')
    <h1 class="text-5xl">Autoservice Experts</h1>
    <div>
        @foreach ($experts as $expert)
            <pre>{{ $expert }}</pre>
        @endforeach
    </div>
@endsection