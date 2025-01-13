<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GreetCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'greet';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Prints a simple hello message';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Print the greeting message
        $this->info("Hello!");

    }
}
