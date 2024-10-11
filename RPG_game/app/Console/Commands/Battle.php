<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Classes\Warrior;
use App\Classes\Mage;
use App\Classes\Healer;

class Battle extends Command
{
    protected $signature = 'simulate:battle';
    protected $description = 'Simulate an RPG battle';

    public function startBattle()
    {
        $warrior = new Warrior('Aragorn', 100, 25);
        $mage = new Mage('Gandalf', 80, 20, 40);
        $healer = new Healer('Elrond', 90, 10, 30);

        $this->info("========= RPG Battle Simulator =========");
        $this->info("Starting battle between " . $warrior->getName() . " (Warrior) and " . $mage->getName() . " (Mage)!\n");

        $round = 1;

        while ($warrior->getHealth() > 0 && $mage->getHealth() > 0) {
            $this->info(">> Round $round:");

            $this->info($warrior->attack());
            $mage->take_damage($warrior->getAttackPower());
            $this->info($mage->getName() . " receives " . $warrior->getAttackPower() . " damage. Health remaining: " . $mage->getHealth() . "\n");

            if ($mage->getHealth() > 0) {
                $this->info($mage->magicAttack());
                $warrior->take_damage($mage->getAttackPower());
                $this->info($warrior->getName() . " receives " . $mage->getAttackPower() . " damage. Health remaining: " . $warrior->getHealth() . "\n");

                if ($round == 2) {
                    $this->info($mage->heal(20));
                }
            }

            if ($round == 3) {
                $this->info($healer->heal(30));
            }

            $round++;
        }

        if ($warrior->getHealth() <= 0) {
            $this->info("========= End of Battle =========");
            $this->info($warrior->getName() . " (Warrior) has been defeated!");
            $this->info("Winner: " . $mage->getName() . " (Mage)");
        } elseif ($mage->getHealth() <= 0) {
            $this->info("========= End of Battle =========");
            $this->info($mage->getName() . " (Mage) has been defeated!");
            $this->info("Winner: " . $warrior->getName() . " (Warrior)");
        }
    }

    public function handle()
    {
        $this->startBattle();
    }
}
