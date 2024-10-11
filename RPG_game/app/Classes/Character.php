<?php

namespace App\Classes;

abstract class Character
{
    protected string $name;
    protected int $health;
    protected int $attack_power;

    public function __construct(string $name, int $health, int $attack_power)
    {
        $this->name = $name;
        $this->health = $health;
        $this->attack_power = $attack_power;
    }

    abstract public function attack(): string;

    public function take_damage(int $damage): void
    {
        $this->health -= $damage;
    }

    public function getHealth(): int
    {
        return $this->health;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAttackPower(): int
    {
        return $this->attack_power;
    }

    public function speech(): string
    {
        return "$this->name is ready for battle!";
    }
}
