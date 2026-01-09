<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

$builder = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    });
    
    $app = $builder->create();

    $host = $_SERVER['HTTP_HOST'] ?? 'cli';

    if ($host === 'andre.cartorioviana.com.br') {
        $app->loadEnvironmentFrom('.env.production');
    } else {
        $app->loadEnvironmentFrom('.env.development');
    }

    // 4. Retornamos a aplicação configurada
    return $app;