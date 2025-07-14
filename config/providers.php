<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Service Providers
    |--------------------------------------------------------------------------
    |
    | Here you may specify the service providers that are loaded for your
    | application. These providers are automatically loaded on the
    | request to your application.
    |
    */

    /*
     * Laravel Framework Service Providers...
     */
    Illuminate\Auth\AuthServiceProvider::class,
    Illuminate\Broadcasting\BroadcastServiceProvider::class,
    Illuminate\Bus\BusServiceProvider::class,
    Illuminate\Cache\CacheServiceProvider::class,
    Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    Illuminate\Cookie\CookieServiceProvider::class,
    Illuminate\Database\DatabaseServiceProvider::class,
    Illuminate\Encryption\EncryptionServiceProvider::class,
    Illuminate\Filesystem\FilesystemServiceProvider::class,
    Illuminate\Foundation\Providers\FoundationServiceProvider::class,
    Illuminate\Hashing\HashServiceProvider::class,
    Illuminate\Mail\MailServiceProvider::class,
    Illuminate\Notifications\NotificationServiceProvider::class,
    Illuminate\Pagination\PaginationServiceProvider::class,
    Illuminate\Pipeline\PipelineServiceProvider::class,
    Illuminate\Queue\QueueServiceProvider::class,
    Illuminate\Redis\RedisServiceProvider::class,
    Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
    Illuminate\Session\SessionServiceProvider::class,
    Illuminate\Translation\TranslationServiceProvider::class,
    Illuminate\Validation\ValidationServiceProvider::class,
    Illuminate\View\ViewServiceProvider::class,

    /*
     * Package Service Providers...
     */

    /*
     * Application Service Providers...
     */
    // App\Providers\AppServiceProvider::class,
    // App\Providers\AuthServiceProvider::class,
    // // App\Providers\BroadcastServiceProvider::class,
    // App\Providers\EventServiceProvider::class,
    // App\Providers\RouteServiceProvider::class,

    // Add your custom provider here, for example:
    Nihar\Inspire\Providers\InspirationProvider::class,
];