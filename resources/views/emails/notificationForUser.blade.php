@component('mail::message')
    # Envoie de message

    Nous sommes très ravis que vous ayez achetez vos tickets

    Vous ne le regretterez pas !

    Merci,<br>
    {{ config('app.name') }}
@endcomponent
