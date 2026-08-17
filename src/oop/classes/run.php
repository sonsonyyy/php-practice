<?php

declare(strict_types=1);

namespace App\Oop\Classes;

require_once realpath('vendor/autoload.php');

use App\Oop\Classes\Car;

/**
 * Class serves as a blueprint or template defining the structure of data and behaviors.
 * Object is an individual instance created from that class blueprint.
 *
 * Properties are variables stored inside a class.
 * Methods are functions defined inside a class.
 */
$car = new Car();
$car->color = "cherry";
$car->drive();
