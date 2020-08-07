<?php

declare(strict_types=1);

namespace App\Cutlery;

class RuncibleSpoon extends Spoon
{   

    public function scoop() : Spoon
    {
       $this->scoop += 2;
       return $this;
    }

    public function howManyScoops() : int
    {
       return $this->scoop;
    }
}
