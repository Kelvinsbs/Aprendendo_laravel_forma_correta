@extends('layouts.default')

@section('sidebar')

@endsection

@section('content')
    <h5>Adicionar business (model)</h5>
    @if ($errors->any())
        Erros: <br>
        @foreach ($errors->all() as $error)
            {{ $error }} <br>
        @endforeach
    @endif
    <br><br><br>
    <form method="POST" action="{{route('businesses.store')}}">
        @csrf
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        @error('name')
            {{ $message }}
        @enderror
        <br>
        <input type="text" name="email" id="email" value="{{ old('email') }}">
        @error('email')
            {{ $message }}
        @enderror
        <br>
        <input type="text" name="address" id="address" value="{{ old('address') }}">
        @error('address')
            {{ $message }}
        @enderror
        <br>
        <button type="submit">Salvar</button>
    </form>

    <hr>

    @foreach ($businesses as  $business)
        {{ $business->name }} &nbsp;
        {{ $business->email }} &nbsp;
        {{ $business->address }}
        <br>
    @endforeach
@endsection
