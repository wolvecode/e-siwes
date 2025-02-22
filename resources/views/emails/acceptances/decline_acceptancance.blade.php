{{-- @component('mail::message') --}}

<div
    style="background-color: #f7f7f7; padding: 20px; border-radius: 8px; width: 100%; max-width: 600px; margin: 0 auto;">
    <h1 style="color: #d9534f; text-align: center;">Organization Application Declined</h1>

    <p style="font-size: 16px; line-height: 1.6;">
        Hi {{ $data->name }},<br><br>
        We regret to inform you that your organization application has been reviewed and declined.
    </p>

    <p style="font-size: 16px; line-height: 1.6;">
        To ensure a successful application in the future, please pay close attention to the following:
    <ul style="list-style-type: disc; margin-left: 20px;">
        <li>Provide a comprehensive and detailed summary of your organization.</li>
        <li>Ensure the company placement letter is authentic and verifiable.</li>
    </ul>
    </p>

    <p style="font-size: 16px; line-height: 1.6;">
        You are welcome to reapply with the necessary improvements.
    </p>

    <div style="text-align: center; margin-top: 30px;">
        @component('mail::button', ['url' => 'http://localhost:8000', 'color' => 'primary'])
            Login to Reapply
        @endcomponent
    </div>

    <p style="font-size: 14px; color: #888; margin-top: 30px; text-align: center;">
        Thank you for your understanding,<br>
        {{ config('app.name') }}
    </p>
</div>

{{-- @endcomponent --}}
