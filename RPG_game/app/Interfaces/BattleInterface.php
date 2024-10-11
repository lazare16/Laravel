<?php

namespace App\Interfaces;

interface BattleInterface
{
    public function startBattle(); 
    public function attack();     
    public function take_damage(); 
}
