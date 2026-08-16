# PHP Practice

A simple repository for practicing PHP fundamentals, object-oriented programming, design patterns, Composer, PSR-4 autoloading, and static analysis with PHPStan.

## Requirements

- PHP
- Composer

## Setup

Install dependencies:

```bash
composer install
```

Generate the Composer autoloader:

```bash
composer dump-autoload
```

## Running PHP Files

Run any PHP file directly using the PHP CLI:

```bash
php exercises/example.php
```

## Autoloading

Classes inside `src/` are autoloaded using Composer PSR-4:

```text
src/
└── App/
    └── Example.php
```

## PHPStan

Run static analysis with:

```bash
vendor/bin/phpstan analyse
```

This repository is primarily for learning, experimentation, and improving PHP fundamentals.