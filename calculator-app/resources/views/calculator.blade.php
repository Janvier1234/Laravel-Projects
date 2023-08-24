@extends('layout')

@section('content')
    <h1>Basic Calculator</h1>

    <form action="{{ route('calculate') }}" method="POST">
        @csrf
        <input type="text" name="expression" id="expression" value="{{ old('expression') }}" required>
        <button type="submit">Calculate</button>
    </form>

    @isset($result)
        <h2>Result: {{ $result }}</h2>
    @endisset
@endsection
