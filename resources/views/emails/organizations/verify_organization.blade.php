{{-- @component('mail::message') --}}

<div
    style="background-color: #f7f7f7; padding: 20px; border-radius: 8px; width: 100%; max-width: 600px; margin: 0 auto;">
    <h1 style="color: #28a745; text-align: center;">Organization Added Successfully!</h1>

    <p style="font-size: 16px; line-height: 1.6;">
        Hi {{ $data->name }},<br><br>
        We're happy to inform you that the organization you added has been successfully approved!
    </p>

    <p style="font-size: 16px; line-height: 1.6;">
        You can now proceed to upload your acceptance letter to complete your application.
    </p>

    <div style="text-align: center; margin-top: 30px;">
        @component('mail::button', ['url' => 'http://localhost:8000', 'color' => 'success'])
            Upload Acceptance Letter
        @endcomponent
    </div>

    <p style="font-size: 14px; color: #888; margin-top: 30px; text-align: center;">
        Thank you,<br>
        {{ config('app.name') }}
    </p>
</div>

{{-- @endcomponent --}}
