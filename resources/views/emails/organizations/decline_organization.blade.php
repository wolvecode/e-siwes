@component('mail::message')

    Hi {{ $data->name }},<br>
    this is an email to verify that the
    organization you requested to add is not accepted.<br>
    Please note that the requested company must not be on the
    placement list and must be a genuine company.

    You can try again.

    click the below button to login
    @component('mail::button', ['url' => 'http://localhost:8000'])
        Button Text
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
