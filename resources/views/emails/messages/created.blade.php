@component('mail::message')
# Hey Admin

- Nom expediteur : {{ $msg->name }}

- Email : {{ $msg->email }}

@component('mail::panel')
{{ $msg->message }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
