<?php

declare(strict_types=1);

namespace App\Oop\Polymorphism;

require_once realpath('vendor/autoload.php');

use App\Oop\Polymorphism\Cat;
use App\Oop\Polymorphism\Dog;

/**
 * Polymorphism translates from Greek to "many forms". It means that different
 * classes can react uniquely to the exact same method call.
 *
 * In PHP, this happens when multiple child classes override a parent method
 * or implement a shared rule.
 */
$dog = new Dog();
$dog->makeNoise(); // Bark

$cat = new Cat();
$cat->makeNoise(); // Meow
