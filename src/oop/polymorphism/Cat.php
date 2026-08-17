<?php

declare(strict_types=1);

namespace App\Oop\Polymorphism;

class Cat extends Animal
{
    #[\Override]
    public function makeNoise(): void
    {
        echo "Meow\n";
    }
}
