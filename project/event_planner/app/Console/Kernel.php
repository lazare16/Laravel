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
        // $schedule->command('events:notify-upcoming')->dailyAt('09:00');
        // $schedule->command('events:notify-upcoming')->everyMinute();
        $schedule->command('events:notify-upcoming')
        ->everyMinute()
        ->onSuccess(function () {
            echo "Command executed successfully.\n";
        })
        ->onFailure(function () {
            echo "Command failed to execute.\n";
        });

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
}
