<?php

declare(strict_types=1);

/**
 * Inheritance allows a new class (child/subclass) to automatically adopt
 * the properties and methods of an existing class (parent/superclass) using the `extends` keyword.
 *
 * It prevents code duplication and builds a logical hierchy.
 */
class Vehicle { // Parent Class / Superclass
    public function honk(): string {
        return "Beep beep!\n";
    }
}

class Truck extends Vehicle { // Child Class / Subclass. Inherits honk() automatically
    public int $payloadCapacity;
}

$truck = new Truck();
echo $truck->honk();
