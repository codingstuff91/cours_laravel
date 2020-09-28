<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{ csrf_field() }}

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <body>
        <h1>Bienvenue sur l'application pour apprendre LARAVEL</h1>
        
        <h2>Créer un nouvel utilisateur</h2>
        <div class="flex-center position-ref full-height">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <input type="text" name="prenom">
                <input type="submit" value="Tapez le nom du nouvel utilisateur">
            </form>
        </div>
    </body>
</html>
