# This is my package filament-ip-country-column

[![Latest Version on Packagist](https://img.shields.io/packagist/v/haosheng/filament-ip-country-column.svg?style=flat-square)](https://packagist.org/packages/haosheng/filament-ip-country-column)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/haosheng/filament-ip-country-column/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/haosheng/filament-ip-country-column/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/haosheng/filament-ip-country-column/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/haosheng/filament-ip-country-column/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/haosheng/filament-ip-country-column.svg?style=flat-square)](https://packagist.org/packages/haosheng/filament-ip-country-column)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require haosheng/filament-ip-country-column
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-ip-country-column-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-ip-country-column-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-ip-country-column-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$ipCountryColumn = new HaoSheng\IpCountryColumn();
echo $ipCountryColumn->echoPhrase('Hello, HaoSheng!');
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

- [Mr.Jin](https://github.com/haosheng0211)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
