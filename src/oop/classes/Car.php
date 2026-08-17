<?php

declare(strict_types=1);

namespace App\Oop\Classes;

class Car
{
    public string $color;

    public function drive(): void
    {
        echo "The $this->color car is driving\n";
    }
}
