<?php

namespace App\Actions\Contact\Contracts;

interface SendContactNotificationActionInterface
{
    public function __invoke(string $name, string $email, string $message): void;
}
