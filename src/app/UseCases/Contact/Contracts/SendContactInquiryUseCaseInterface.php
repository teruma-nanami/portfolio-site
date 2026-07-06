<?php

namespace App\UseCases\Contact\Contracts;

interface SendContactInquiryUseCaseInterface
{
    /**
     * @param  array<string, string>  $data
     */
    public function execute(array $data): void;
}
