@extends('layouts.app')

@section('content')
    <h1>Liste des utilisateurs</h1>

    @foreach ($users as $user)
        <p>{{ $user->name }}</p>
        <p>{{ $user->email }}</p>
    @endforeach
@endsection