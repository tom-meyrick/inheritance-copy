<?php

declare(strict_types=1);

namespace App\Languages;

class French extends Language
{
    protected $name = "French"; 

    public function name()  : string
    {
        return $this->name;
    }

    public function hello() : string
    {
        return "Bonjour";
    }
}