<?php

declare(strict_types=1);

namespace App\Cutlery;

// Create a class Spoon in the App\Cutlery namespace. It should have a scoop() method. When you call howManyScoops() it should tell you how many times it has been scooped. Also create a RuncibleSpoon class in the same namespace. It should extend the Spoon class. Override its scoop() method so that it does two scoops for each call of scoop().

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

// public function spoon()
// {
//     echo "\n01) Spoon\n";

//     $spoon = new Cutlery\Spoon();
//     $runcible = new Cutlery\RuncibleSpoon();

//     $spoon->scoop()->scoop();
//     $runcible->scoop()->scoop();

//     dump(
//         $spoon->howManyScoops(), // 2
//         $runcible->howManyScoops() // 4
//     );
// }

