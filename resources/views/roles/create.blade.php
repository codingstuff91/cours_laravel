<h1>Creation d'un nouveau role</h1>

<form action="{{ route('roles.store') }}" method="POST">
    @csrf
    <input type="text" name="role" placeholder="Saisir le nom du nouveau role">
    <input type="submit" value="Confirmer la creation">
</form>