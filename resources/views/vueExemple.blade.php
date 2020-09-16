<h1>Bienvenue sur la vue de test</h1>

@foreach ($trucs as $user)
    <p>{{ $user->name }}</p>
    <p>{{ $user->email }}</p>
@endforeach

{{-- <p>{{ $users->prenom }}</p> --}}