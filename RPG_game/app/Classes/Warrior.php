<?php

namespace App\Classes;

class Warrior extends Character
{
    public function __construct(string $name, int $health, int $attack_power)
    {
        parent::__construct($name, $health, $attack_power);
    }

    public function speech(): string
    {
        return "I am $this->name, and I am here to protect the country!";
    }

    public function attack(): string
    {
        return "$this->name attacks with a sword!";
    }
}
