<?php

namespace App\Console\Commands;

use App\Traits\Logger;
use App\Classes\Students;
use App\Classes\Person;
use Illuminate\Console\Command;

class PersonCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'person:command';

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
        $person1 = new Person("Jaba",20);

        $xalxi = [
            new Person("Jaba", 20),
            new Person("Dato", 25),
            new Person("Tekla", 30),
        ];


        echo $average;

        $studentPers = new Students("Gio",20,3);


        dd(
            $person1->getAge(),
            $studentPers
        );
    }
}
