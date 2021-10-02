@component('mail::message')

    Hi {{ $data->name }},<br>
    This is a confirmation message
    that your acceptance have been
    reviewed and declined.

    Please ensure to have a good summary,
    and company placement letter is real.
    You can try again.

    You can click on the below button to login.

    @component('mail::button', ['url' => 'http://localhost:8000'])
        login
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
