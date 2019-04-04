@extends('layout.base', ["current"=>"principal"])

@section('body')
    <h1>Nosso CRUD Top!</h1>
    @auth
        <h1> Olá, {{ Auth::user()->name }}</h1>
    @endauth
@endsection