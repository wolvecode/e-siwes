@component('mail::message')

    <div
        style="background-color: #f7f7f7; padding: 20px; border-radius: 8px; width: 100%; max-width: 600px; margin: 0 auto;">
        <h1 style="color: #d9534f; text-align: center;">Organization Request Not Accepted</h1>

        <p style="font-size: 16px; line-height: 1.6;">
            Hi {{ $data->name }},<br><br>
            We regret to inform you that your request to add a new organization has not been accepted.
        </p>

        <p style="font-size: 16px; line-height: 1.6;">
            Please ensure that the organization you are trying to add meets the following criteria:
        <ul style="list-style-type: disc; margin-left: 20px;">
            <li>The organization is not already on the placement list.</li>
            <li>The organization is a genuine and verifiable company.</li>
        </ul>
        </p>

        <p style="font-size: 16px; line-height: 1.6;">
            You are welcome to try again with a different organization that meets these requirements.
        </p>

        <div style="text-align: center; margin-top: 30px;">
            @component('mail::button', ['url' => 'http://localhost:8000', 'color' => 'success'])
                Login to Try Again
            @endcomponent
        </div>

        <p style="font-size: 14px; color: #888; margin-top: 30px; text-align: center;">
            Thank you for your understanding,<br>
            {{ config('app.name') }}
        </p>
    </div>

@endcomponent
