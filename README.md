# Filament Sortable

[![Latest Version on Packagist](https://img.shields.io/packagist/v/savannabits/filament-sortable.svg?style=flat-square)](https://packagist.org/packages/savannabits/filament-sortable)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/savannabits/filament-sortable/run-tests?label=tests)](https://github.com/savannabits/filament-sortable/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/savannabits/filament-sortable/Check%20&%20fix%20styling?label=code%20style)](https://github.com/savannabits/filament-sortable/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/savannabits/filament-sortable.svg?style=flat-square)](https://packagist.org/packages/savannabits/filament-sortable)



Sort Items and Move them across Statuses on the board using Sortable.js

## Installation

You can install the package via composer:

```bash
composer require savannabits/filament-sortable
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-sortable-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-sortable-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-sortable-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filament-sortable = new Savannabits\FilamentSortable();
echo $filament-sortable->echoPhrase('Hello, Savannabits!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Sam Maosa](https://github.com/savannabits)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
