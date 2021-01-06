@component('mail::message')
# Nouveau message

Une question taraude un utilisateur, vous pourrez voir son message via le panneau d'administration

@component('mail::button', ['url' => 'http://gourmet.test/nova/resources/contact-forms'])
    Je viens voir le message
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
