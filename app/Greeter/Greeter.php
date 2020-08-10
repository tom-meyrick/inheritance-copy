<?php

declare(strict_types=1);

namespace App\Greeter;

class Greeter
{
    private $language; 

    public function __construct($language) 
    {
        $this->language = $language;
    }

    public function greet($name)
    {
       $hi = $this->language->hello();
       return "{$hi} {$name}";
    }
}