<?php

namespace App\Classes;

use App\Traits\HealableTrait;
use App\Traits\MagicAttackTrait;

class Mage extends Character
{
    use HealableTrait, MagicAttackTrait;

    private int $super_damage;

    public function __construct(string $name, int $health, int $attack_power, int $super_damage)
    {
        parent::__construct($name, $health, $attack_power);
        $this->super_damage = $super_damage;
    }

    public function attack(): string
    {
        return "$this->name casts a fireball!";
    }

    public function mageSuperPower(): string
    {
        $this->super_damage *= 2;
        return "$this->name uses a super attack and deals $this->super_damage damage!";
    }
}
