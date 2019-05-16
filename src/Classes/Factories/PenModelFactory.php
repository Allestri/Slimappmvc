<?php

namespace App\Factories;

class PenModelFactory
{
    function __invoke()
    {
        $cow = new \App\Models\CowModel();
        $chicken = new \App\Models\ChickenModel();
        return new \App\Models\PenModel($cow, $chicken);
    }
}