<?php

declare(strict_types=1);

/**
 * Class serves as a blueprint or template defining the structure of data and behaviors.
 * Object is an individual instance created from that class blueprint.
 *
 * Properties are variables stored inside a class.
 * Methods are functions defined inside a class.
 */
final class Car {
    public string $color; // Property

    public function drive(): void { // Method
        echo "The car is driving";
    }
}

$car = new Car(); // Object instantiation
$car->color = "cherry\n";
echo $car->color;