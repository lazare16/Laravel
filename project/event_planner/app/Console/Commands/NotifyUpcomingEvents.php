<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Event; 
use Illuminate\Support\Facades\Log;

class NotifyUpcomingEvents extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'events:notify-upcoming';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send notifications for upcoming events';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $today = now();

        $upcomingEvents = Event::whereDate('date', $today->addDay())->get();

        if ($upcomingEvents->isEmpty()) {
            $this->info('No upcoming events for tomorrow.');
            return 0;
        }

        foreach ($upcomingEvents as $event) {
            Log::info("Upcoming Event: {$event->title} on {$event->date}");
            $this->info("Notification sent for event: {$event->title}");
        }

        $this->info('Notifications sent for all upcoming events.');
        return 0;
    }
}
