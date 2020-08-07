<?php

declare(strict_types=1);

namespace App\Cutlery;

class Spoon 
{
    private $scoop = 0;

    public function scoop() : Spoon
    {
       $this->scoop += 1;
       return $this;
    }

    public function howManyScoops() : int
    {
       return $this->scoop;
    }
}

