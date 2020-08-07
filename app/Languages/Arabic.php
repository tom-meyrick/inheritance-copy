<?php

declare(strict_types=1);

namespace App\Languages;

class Arabic extends Language
{
    protected $name = "Arabic"; 

    public function name()  : string
    {
        return $this->name;
    }

    public function hello() : string
    {
        return "مرحبا";
    }
}