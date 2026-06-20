<?php

namespace App\Providers;

use App\Actions\Contact\Contracts\SendContactNotificationActionInterface;
use App\Actions\Contact\SendContactNotificationAction;
use App\UseCases\Contact\Contracts\SendContactInquiryUseCaseInterface;
use App\UseCases\Contact\SendContactInquiryUseCase;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(SendContactInquiryUseCaseInterface::class, SendContactInquiryUseCase::class);
        $this->app->bind(SendContactNotificationActionInterface::class, SendContactNotificationAction::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
