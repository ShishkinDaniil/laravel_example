<?php


use App\Http\Middleware\ActiveMiddleware;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Middleware\TokenMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: [__DIR__ . '/../routes/main.php', __DIR__ . '/../routes/admin.php', __DIR__ . '/../routes/user.php', __DIR__ . '/../routes/api.php'],
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->use([
            \Illuminate\Foundation\Http\Middleware\TrimStrings::class,
            \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
            App\Http\Middleware\LogMiddleware::class,
        ]);

        $middleware->alias([
            'auth' => Illuminate\Auth\Middleware\Authenticate::class,
            'authRedirect' => RedirectIfAuthenticated::class,
            'active' => ActiveMiddleware::class,
            'admin' => AdminMiddleware::class,
            'token' => TokenMiddleware::class,
        ]);


    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
