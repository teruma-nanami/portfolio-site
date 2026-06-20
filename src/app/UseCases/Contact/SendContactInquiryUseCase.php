<?php

namespace App\UseCases\Contact;

use App\Actions\Contact\Contracts\SendContactNotificationActionInterface;
use App\UseCases\Contact\Contracts\SendContactInquiryUseCaseInterface;

class SendContactInquiryUseCase implements SendContactInquiryUseCaseInterface
{
    public function __construct(
        private SendContactNotificationActionInterface $sendContactNotificationAction,
    ) {
    }

    /**
     * @param array<string, string> $data
     */
    public function execute(array $data): void
    {
        ($this->sendContactNotificationAction)(
            $data['name'],
            $data['email'],
            $data['message'],
        );
    }
}
