<?php

declare(strict_types=1);

/**
 * Polymorphism translates from Greek to "many forms". It means that different
 * classes can react uniquely to the exact same method call.
 *
 * In PHP, this happens when multiple child classes override a parent method
 * or implement a shared rule. 
 */
class Animal
{
    public function makeNoise(): string
    {
        return "Generic sound";
    }
}

class Dog extends Animal
{
    #[Override]
    public function makeNoise(): string // Overrides parent
    {
        return "Bark";
    }
}

class Cat extends Animal
{
    #[Override]
    public function makeNoise(): string // Overrides parent
    {
        return "Meow";
    }
}
