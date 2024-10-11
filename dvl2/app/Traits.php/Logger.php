<?php

namespace App\Traits;

trait Logger{
    public function log($message)
    {
        Log::info($message);
    }
}