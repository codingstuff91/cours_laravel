@extends('layouts.app')

@section('content')
    <h1>Création d'un nouveau document</h1>
    <form action="{{ route('document.store') }}" method="POST">
        @csrf
        <label>Titre du document</label>
        <input type="text" name="title">
        
        <label>Contenu du document</label>
        <input type="text" name="body">

        <input type="submit" value="Valider">
    </form>
@endsection