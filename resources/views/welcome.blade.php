<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{ csrf_field() }}

        <title>Laravel</title>
    <body>
        <div class="container" id="application">

            <h1>Bienvenue sur l'application pour apprendre LARAVEL</h1>
        
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
