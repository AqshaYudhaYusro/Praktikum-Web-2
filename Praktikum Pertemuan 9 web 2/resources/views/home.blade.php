@extends('main')

@section('content')
    <h1>Saya dev pemula</h1>

    @if ($status === 'Single')
        <h3>nama saya adalah {{ $username }} role saya adalah {{ $status }}</h3>
    @else
        <h3>nama saya adalah {{ $username }}</h3>
    @endif
@endsection