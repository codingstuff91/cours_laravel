<h1>Edition d'un role</h1>

<form action="{{ route('roles.update',$role->id) }}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="role" value="{{ $role->role }}">
    <input type="submit" value="Mettre a jour le role">
</form>