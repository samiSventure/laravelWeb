<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\ageCheck;
use App\Http\Middleware\countryCheck;
use App\Http\Middleware\loginCheck;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
        $middleware->append(ageCheck::class);
        //$middleware->append(ageCheck::class);
    /*    $middleware->appendToGroup('check',[
           ageCheck::class,
           countryCheck::class,
          //loginCheck::class
        ]);*/
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
