<?php

declare(strict_types=1);

namespace App\Oop\Polymorphism;

class Animal
{
    public function makeNoise(): void
    {
        echo "Generic sound\n";
    }
}
