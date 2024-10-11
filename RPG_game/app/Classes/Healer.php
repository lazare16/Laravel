<?php

namespace App\Classes;

use App\Traits\HealableTrait;
use App\Traits\MagicAttackTrait;

class Healer extends Character
{
    use HealableTrait, MagicAttackTrait;

    private int $healingPower;

    public function __construct(string $name, int $health, int $attack_power, int $healingPower)
    {
        parent::__construct($name, $health, $attack_power);
        $this->healingPower = $healingPower;
    }

    public function attack(): string
    {
        return "$this->name attacks with a light strike dealing $this->attack_power damage.";
    }
}
