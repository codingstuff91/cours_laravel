<h1>liste de tous les roles existants</h1>

@foreach ($roles as $role)
    <p>{{ $role->role }} <button><a href="{{ route('roles.edit',$role->id) }}">Editer le role</a></button></p>
@endforeach