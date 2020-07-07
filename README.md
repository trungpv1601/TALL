# Inspire from Laravel Nova

[![Latest Version on Packagist](https://img.shields.io/packagist/v/trungpv1601/TALL.svg?style=flat-square)](https://packagist.org/packages/trungpv1601/TALL)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/trungpv1601/TALL/run-tests?label=tests)](https://github.com/trungpv1601/TALL/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/trungpv1601/TALL.svg?style=flat-square)](https://packagist.org/packages/trungpv1601/TALL)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require trungpv1601/TALL
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Trungpv1601\TALL\TALLServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Trungpv1601\TALL\TALLServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

``` php
$TALL = new Trungpv1601\TALL();
echo $TALL->echoPhrase('Hello, Trungpv1601!');
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

If you discover any security related issues, please email trungpv1601@gmail.com instead of using the issue tracker.

## Credits

- [trungpv1601](https://github.com/trungpv1601)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
