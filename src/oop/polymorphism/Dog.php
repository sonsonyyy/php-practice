<?php

declare(strict_types=1);

namespace App\Oop\Polymorphism;

class Dog extends Animal
{
    #[\Override]
    public function makeNoise(): void
    {
        echo "Bark\n";
    }
}
