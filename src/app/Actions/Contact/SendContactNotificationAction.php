<?php

namespace App\Actions\Contact;

use App\Actions\Contact\Contracts\SendContactNotificationActionInterface;
use App\Mail\ContactNotification;
use Illuminate\Support\Facades\Mail;

class SendContactNotificationAction implements SendContactNotificationActionInterface
{
    public function __invoke(string $name, string $email, string $message): void
    {
        Mail::to(config('mail.contact_notify_address'))
            ->send(new ContactNotification($name, $email, $message));
    }
}
