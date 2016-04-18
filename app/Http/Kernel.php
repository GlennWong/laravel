<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \App\Http\Middleware\EncryptCookies::class,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        //参考Overtrue注释 \App\Http\Middleware\VerifyCsrfToken::class,
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'wechat.oauth' => \Overtrue\LaravelWechat\Middleware\OAuthAuthenticate::class,
    ];
}
// Overtrue Rewrite
// namespace App\Http;
// use Illuminate\Foundation\Http\Kernel as HttpKernel;
// class Kernel extends HttpKernel {
//     /**
//      * The application's global HTTP middleware stack.
//      *
//      * @var array
//      */
//     protected $middleware = [
//         'Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode',
//         'Illuminate\Cookie\Middleware\EncryptCookies',
//         'Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse',
//         'Illuminate\Session\Middleware\StartSession',
//         'Illuminate\View\Middleware\ShareErrorsFromSession',
//     ];
//     /**
//      * The application's route middleware.
//      *
//      * @var array
//      */
//     protected $routeMiddleware = [
//         'auth'       => 'App\Http\Middleware\Authenticate',
//         'auth.basic' => 'Illuminate\Auth\Middleware\AuthenticateWithBasicAuth',
//         'guest'      => 'App\Http\Middleware\RedirectIfAuthenticated',
//         'csrf'       => 'App\Http\Middleware\VerifyCsrfToken',
//         'wechat.oauth' => \Overtrue\LaravelWechat\Middleware\OAuthAuthenticate::class,
//     ];
// }