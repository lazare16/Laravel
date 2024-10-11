<?php

namespace App\Traits;

trait HealableTrait
{
    public function heal(int $amount): string
    {
        $this->health += $amount;
        return "$this->name heals for $amount points. Health is now: $this->health.";
    }
}
