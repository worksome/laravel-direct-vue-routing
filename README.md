# Laravel Direct Vue Routing

[![Latest Version on Packagist](https://img.shields.io/packagist/v/worksome/laravel-direct-vue-routing.svg?style=flat-square)](https://packagist.org/packages/worksome/laravel-direct-vue-routing)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/worksome/laravel-direct-vue-routing/tests.yml?branch=main&style=flat-square&label=Tests)](https://github.com/worksome/laravel-direct-vue-routing/actions?query=workflow%3ATests+branch%3Amain)
[![GitHub Static Analysis Action Status](https://img.shields.io/github/actions/workflow/status/worksome/laravel-direct-vue-routing/static.yml?branch=main&style=flat-square&label=Static%20Analysis)](https://github.com/worksome/laravel-direct-vue-routing/actions?query=workflow%3A"Static%20Analysis"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/worksome/laravel-direct-vue-routing.svg?style=flat-square)](https://packagist.org/packages/worksome/laravel-direct-vue-routing)

Add support for mapping Laravel routes directly to Vue components.

## Installation

You can install the package via composer:

```bash
composer require worksome/laravel-direct-vue-routing
```

Optionally, you can publish the views using:

```bash
php artisan vendor:publish --tag="direct-vue-routing-views"
```

## Usage

```php
class TestController
{
    public function __invoke()
    {
        return response()->vue('MyVueComponent', ['myProp' => 'my-data'])
    }
}
```

## Testing

```bash
composer test
```

## Changelog

Please see [GitHub Releases](https://github.com/worksome/laravel-direct-vue-routing/releases) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Owen Voke](https://github.com/worksome)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
