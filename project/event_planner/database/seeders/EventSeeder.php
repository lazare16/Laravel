<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Event::create(['title' => 'Meeting with Team', 'date' => now()->addDay()]);
        Event::create(['title' => 'Client Presentation', 'date' => now()->addDays(2)]);
    }
}
