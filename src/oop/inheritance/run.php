<?php

declare(strict_types=1);

namespace App\Oop\Inheritance;

require_once realpath('vendor/autoload.php');

use App\Oop\Inheritance\Truck;

/**
 * Inheritance allows a new class (child/subclass) to automatically adopt
 * the properties and methods of an existing class (parent/superclass) using the `extends` keyword.
 *
 * It prevents code duplication and builds a logical hierchy.
 */
$truck = new Truck();
$truck->honk();
