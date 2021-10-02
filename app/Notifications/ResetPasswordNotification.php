<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\ResetPassword as ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ResetPasswordNotification extends ResetPassword
{
    /**
     * Build the mail representation of the notification.
     *
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage())
            ->subject('Password reset link')
            ->greeting('Hello Adedeji stephen \n kindly click on the button to reset password')
            ->action('click', route('password.reset', $this->token).'?email='.urlencode($notifiable->getEmailForPasswordReset()))
            ->line('');
    }
}
