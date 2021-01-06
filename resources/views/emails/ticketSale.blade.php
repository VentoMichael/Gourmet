@component('mail::message')
    # Les tickets s'envolent

    Wouahh !
    Une nouvelle vente de ticket a eu lieu.

    @component('mail::button', ['url' => 'http://gourmet.test/nova/resources/tickets'])
        Je viens voir combien de billets ont été vendus
    @endcomponent

    Merci,<br>
    {{ config('app.name') }}
@endcomponent
