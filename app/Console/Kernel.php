<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }


    protected $middleware = [
        // Middleware lainnya
        \Barryvdh\HttpCache\Middleware\CacheRequests::class,
    ];

    protected $middlewareGroups = [
        'web' => [
            // Middleware lainnya
            \Barryvdh\HttpCache\Middleware\CacheRequests::class,
        ],
    ];

    protected $routeMiddleware = [
        // ...
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
    ];


}
