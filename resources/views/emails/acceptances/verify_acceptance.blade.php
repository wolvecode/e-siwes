{{-- @component('mail::message') --}}

<div
    style="background-color: #f7f7f7; padding: 20px; border-radius: 8px; width: 100%; max-width: 600px; margin: 0 auto;">
    <h1 style="color: #28a745; text-align: center;">Organization Application Accepted!</h1>

    <p style="font-size: 16px; line-height: 1.6;">
        Hi {{ $data->name }},<br><br>
        We are pleased to inform you that your organization application has been reviewed and accepted!
    </p>

    <p style="font-size: 16px; line-height: 1.6;">
        We wish you the very best in your upcoming industrial training at your chosen firm/company.
    </p>

    <div style="text-align: center; margin-top: 30px;">
        @component('mail::button', ['url' => 'http://localhost:8000', 'color' => 'success'])
            Login
        @endcomponent
    </div>

    <p style="font-size: 14px; color: #888; margin-top: 30px; text-align: center;">
        Thank you and congratulations,<br>
        {{ config('app.name') }}
    </p>
</div>

{{-- @endcomponent --}}
