# Laravel Package for my preferred implementation of Ecommerce

[![Latest Version on Packagist](https://img.shields.io/packagist/v/drewroberts/ecommerce.svg?style=flat-square)](https://packagist.org/packages/drewroberts/ecommerce)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/drewroberts/ecommerce/run-tests?label=tests)](https://github.com/drewroberts/ecommerce/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/drewroberts/ecommerce.svg?style=flat-square)](https://packagist.org/packages/drewroberts/ecommerce)

Laravel Package for my preferred implementation of Ecommerce

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require drewroberts/ecommerce
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="DrewRoberts\Ecommerce\EcommerceServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="DrewRoberts\Ecommerce\EcommerceServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

``` php
$ecommerce = new DrewRoberts\Ecommerce();
echo $ecommerce->echoPhrase('Hello, DrewRoberts!');
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email packages@drewroberts.com instead of using the issue tracker.

## Credits

- [Drew Roberts](https://github.com/drewroberts)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
