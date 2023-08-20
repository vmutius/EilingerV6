<x-mail::message>
Sie haben eine neue Nachricht zu Ihrem Antrag

{{ $message->user->username }} hat eine Nachricht zu ihren Antrag **{{ $message->application->name }}** :

Nachricht: {{ $message->body}}

<x-mail::button :url="route('user_antrag', ['application_id' => $message->application->id, 'locale'=> app()->getLocale()])">
Zum Antrag
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
