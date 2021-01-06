@component('mail::message')
# Nouvel Exposant en vue

Wouahh !
Une nouvelle demande d'exposant, vous pourrez l'acceptez ou non via le panneau d'administration

@component('mail::button', ['url' => 'http://gourmet.test/nova/resources/exposants'])
Je viens voir de qui il s'agit
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
