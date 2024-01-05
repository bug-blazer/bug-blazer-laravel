# BugBlazer Laravel Integration

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bug-blazer/bug-blazer-laravel.svg?style=flat-square)](https://packagist.org/packages/bug-blazer/bug-blazer-laravel)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/bug-blazer/bug-blazer-laravel/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/bug-blazer/bug-blazer-laravel/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/bug-blazer/bug-blazer-laravel/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/bug-blazer/bug-blazer-laravel/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/bug-blazer/bug-blazer-laravel.svg?style=flat-square)](https://packagist.org/packages/bug-blazer/bug-blazer-laravel)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/bug-blazer-laravel.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/bug-blazer-laravel)

## Installation

You can install the package via composer:

```bash
composer require bug-blazer/bug-blazer-laravel
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="bug-blazer-laravel-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$bugBlazer = new BugBlazer();
echo $bugBlazer->echoPhrase('Hello!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Davit Vardanyan](https://github.com/bug-blazer)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
