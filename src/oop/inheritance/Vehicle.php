<?php

declare(strict_types=1);

namespace App\Oop\Inheritance;

class Vehicle // Parent Class / Superclass
{
    public function honk(): void
    {
        echo "Beep beep!\n";
    }
}
