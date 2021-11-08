Laravel Useful Casts
====================

![CI](https://github.com/renoki-co/laravel-useful-casts/workflows/CI/badge.svg?branch=master)
[![codecov](https://codecov.io/gh/renoki-co/laravel-useful-casts/branch/master/graph/badge.svg)](https://codecov.io/gh/renoki-co/laravel-useful-casts/branch/master)
[![StyleCI](https://github.styleci.io/repos/302723910/shield?branch=master)](https://github.styleci.io/repos/302723910)
[![Latest Stable Version](https://poser.pugx.org/renoki-co/laravel-useful-casts/v/stable)](https://packagist.org/packages/renoki-co/laravel-useful-casts)
[![Total Downloads](https://poser.pugx.org/renoki-co/laravel-useful-casts/downloads)](https://packagist.org/packages/renoki-co/laravel-useful-casts)
[![Monthly Downloads](https://poser.pugx.org/renoki-co/laravel-useful-casts/d/monthly)](https://packagist.org/packages/renoki-co/laravel-useful-casts)
[![License](https://poser.pugx.org/renoki-co/laravel-useful-casts/license)](https://packagist.org/packages/renoki-co/laravel-useful-casts)

Laravel Useful Casts is a simple package for Laravel 7.0+ that comes with already-tested and already-written, useful casts for Eloquent models.

## 🤝 Supporting

**If you are using one or more Renoki Co. open-source packages in your production apps, in presentation demos, hobby projects, school projects or so, sponsor our work with [Github Sponsors](https://github.com/sponsors/rennokki). 📦**

[<img src="https://github-content.s3.fr-par.scw.cloud/static/26.jpg" height="210" width="418" />](https://github-content.renoki.org/github-repo/26)

## 🚀 Installation

You can install the package via composer:

```bash
composer require renoki-co/laravel-useful-casts
```

## 🙌 Usage

```php
use RenokiCo\UsefulCasts\Casts\Encrypted;

class User extends Model
{
    protected $casts = [
        'ssn' => Encrypted::class,
    ];
}

// 'ssn' value gets encrypted in the database.
$user->update(['ssn' => '12345678']);
```

## Available Casts

| Cast class | Purpose |
|------------|---------|
| `RenokiCo\UsefulCasts\Casts\Encrypted::class` | Encrypts and decrypts a value from the database |
| `RenokiCo\UsefulCasts\Casts\Arrayed::class` | Serializes and unserialies an array. If the value is null, returns an empty array. |
| `RenokiCo\UsefulCasts\Casts\EncryptedArray::class` | Encrypts and decrypts a value from the database, making sure it's always an array, even if the value is set or get as `null` |

## 🐛 Testing

``` bash
vendor/bin/phpunit
```

## 🤝 Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## 🔒  Security

If you discover any security related issues, please email alex@renoki.org instead of using the issue tracker.

## 🎉 Credits

- [Alex Renoki](https://github.com/rennokki)
- [All Contributors](../../contributors)
