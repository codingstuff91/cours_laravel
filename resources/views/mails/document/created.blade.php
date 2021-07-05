@component('mail::message')
# Nouveau document crée

Un nouveau document a été crée par un utilisateur

@component('mail::button', ['url' => ''])
Consulter
@endcomponent

{{ config('app.name') }}
@endcomponent
