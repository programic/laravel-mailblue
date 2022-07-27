# Programic - Laravel MailBlue

[![Latest Version on Packagist](https://img.shields.io/packagist/v/programic/laravel-mailblue.svg?style=flat-square)](https://packagist.org/packages/programic/laravel-mailblue)
[![Tests](https://github.com/programic/laravel-mailblue/actions/workflows/tests.yml/badge.svg?branch=main)](https://github.com/programic/laravel-mailblue/actions/workflows/tests.yml)
![](https://github.com/programic/laravel-mailblue/workflows/Run%20Tests/badge.svg?branch=main)
[![Total Downloads](https://img.shields.io/packagist/dt/programic/laravel-mailblue.svg?style=flat-square)](https://packagist.org/packages/programic/laravel-mailblue)

This package is a Laravel extension

## Installation
This package requires PHP 8.0 and Laravel 8.0 or higher.

```
composer require programic/laravel-mailblue
```

Add MailBlue credentials to your services config and .env:
```php
'mailblue' => [
    'baseURL' => env('MAILBLUE_BASE_URL'),
    'apiToken' => env('MAILBLUE_API_TOKEN'),
    'attempts' => 3, // Max number of attempts should the request fail
    'sleep' => 100, // Sleep between attempts
    
],
```

## Usage



## Testing
```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security-related issues, please email [info@programic.com](mailto:info@programic.com) instead of using the issue tracker.

## Credits

- [Arjen Zwerver](https://github.com/arjenprogramic)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
