@extends('layouts.app')

@section('content')

<h1>Ajouter un nouvel utilisateur</h1>
<form action="{{ route('user.store') }}" method="POST">
    @csrf

    <label>Email :</label>
    <input type="email" name="email">
    
    <label>Pseudo :</label>
    <input type="text" name="name">
    
    <label>Mot de passe :</label>
    <input type="text" name="password">

    <select name="role[]" multiple>
        @foreach ($roles as $role)
            <option value="{{ $role->id }}">{{ $role->role }}</option>
        @endforeach
    </select>

    <input type="submit" value="Créer un utilisateur">
</form>

@endsection