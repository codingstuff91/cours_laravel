<h1>Connexion utilisateur</h1>

<form action="{{ route('login') }}" method="POST">
    @csrf

    <input type="text" name="email">
    <input type="password" name="password">

    <input type="submit" value="Connexion">
</form>