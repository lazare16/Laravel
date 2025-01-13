<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GreetPerson extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'greet {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->argument('name');

        $this->info("Hello, {$name}! Welcome to Laravel!");
    }
}
