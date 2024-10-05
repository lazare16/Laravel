<?php

namespace App\Console\Commands;

use App\Classes\Person;

use Illuminate\Console\Command;

class PersonCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:person';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $lazare = new Person("Lazare", 20);
      
        dd(
            $lazare
        );
    }
}
