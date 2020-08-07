<?php

declare(strict_types=1);

namespace App\Cutlery;

class Spoon 
{
    protected $numScoops = 0;

    public function scoop() : Spoon
    {
       $this->numScoops += 1;
       return $this;
    }

    public function howManyScoops() : int
    {
       return $this->numScoops;
    }
}

