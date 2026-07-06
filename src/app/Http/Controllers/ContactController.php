<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\UseCases\Contact\Contracts\SendContactInquiryUseCaseInterface;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function __construct(
        private SendContactInquiryUseCaseInterface $sendContactInquiryUseCase,
    ) {}

    public function store(ContactRequest $request): RedirectResponse
    {
        $this->sendContactInquiryUseCase->execute($request->validated());

        return redirect()->route('contact')->with('status', 'お問い合わせを送信しました。');
    }
}
