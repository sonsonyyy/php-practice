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

## Configuration Files

The repository includes pre-configured settings for static analysis and code quality:

- `phpstan.neon` (PHPStan config)
- `phpcs.xml` (PHP_CodeSniffer ruleset)

## Running PHP Files

Run any PHP file directly using the PHP CLI:

```bash
php src/oop/abstraction/run.php
```

## Autoloading

Classes inside `src/` are autoloaded using Composer PSR-4:

```text
src/
└── oop/
    └── encapsulation/
        └── BankAccount.php
```

## PHPStan (Static Analysis)

Run static analysis:

```bash
composer analyse
```

## PHP_CodeSniffer (Code Quality)

Checking coding standards:

```bash
composer cs
```

Automatically fix violations:
```bash
composer cs:fix
```

This repository is primarily for learning, experimentation, and improving PHP fundamentals.