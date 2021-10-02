@component('mail::message')

Hi {{ $data->name }},<br>
this is an email to verify that the
organization you added have been
successfully added.<br>

You can proceed to upload your acceptance
letter.

click the below button to login
@component('mail::button', ['url' => 'http://localhost:8000'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
