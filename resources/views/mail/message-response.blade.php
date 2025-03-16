<x-mail::message>
# Response

Dear {{ $message->name }},
Your message with ticket id {{ $message->ticket_number }} was received successfully and will be responded to shortly.

<x-mail::button :url="route('landing')">
Visit Our Page
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
