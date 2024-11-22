@extends('layouts.default')

@section('title', 'User title')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/user.css')}}">
@endpush

@section('sidebar')
    <div>
        <nav>
            Sidebar de user
        </nav>
    </div>
@endsection

@section('content')
<h1>User</h1>
{{ $user->name }} <br>
{{ $user->email }} <br>
@endsection

@push('scripts')
    <script src="{{ asset('/js/user.js') }}"></script>
@endpush

@prepend('scripts')
    <script>
        var texto = 'ola'
    </script>
@endprepend
