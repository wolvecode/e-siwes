@component('mail::message')

Hi {{ $data->name }},<br>
This is a confirmation message
that your acceptance have been
reviewed and accepted.

Wish you good luck in your
at your industrial training
firm/company.

You can click on the below button to login.

@component('mail::button', ['url' => 'http://localhost:8000'])
login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
