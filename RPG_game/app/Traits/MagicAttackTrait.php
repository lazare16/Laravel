<?php

namespace App\Traits;

trait MagicAttackTrait
{
    public function magicAttack(): string
    {
        return "$this->name casts a powerful magic attack!";
    }
}
