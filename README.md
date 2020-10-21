Package Name Here
===================================

![CI](https://github.com/renoki-co/laravel-useful-casts/workflows/CI/badge.svg?branch=master)
[![codecov](https://codecov.io/gh/renoki-co/laravel-useful-casts/branch/master/graph/badge.svg)](https://codecov.io/gh/renoki-co/laravel-useful-casts/branch/master)
[![StyleCI](https://github.styleci.io/repos/302723910/shield?branch=master)](https://github.styleci.io/repos/302723910)
[![Latest Stable Version](https://poser.pugx.org/renoki-co/laravel-useful-casts/v/stable)](https://packagist.org/packages/renoki-co/laravel-useful-casts)
[![Total Downloads](https://poser.pugx.org/renoki-co/laravel-useful-casts/downloads)](https://packagist.org/packages/renoki-co/laravel-useful-casts)
[![Monthly Downloads](https://poser.pugx.org/renoki-co/laravel-useful-casts/d/monthly)](https://packagist.org/packages/renoki-co/laravel-useful-casts)
[![License](https://poser.pugx.org/renoki-co/laravel-useful-casts/license)](https://packagist.org/packages/renoki-co/laravel-useful-casts)

Laravel Useful Casts is a simple package for Laravel 7.0+ that comes with already-tested and already-written, useful casts for Eloquent models.

## 🤝 Supporting

Renoki Co. on GitHub aims on bringing a lot of open source projects and helpful projects to the world. Developing and maintaining projects everyday is a harsh work and tho, we love it.

If you are using your application in your day-to-day job, on presentation demos, hobby projects or even school projects, spread some kind words about our work or sponsor our work. Kind words will touch our chakras and vibe, while the sponsorships will keep the open source projects alive.

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

- `RenokiCo\UsefulCasts\Casts\Encrypted::class` - encrypts/decrypts a value from the database
- `RenokiCo\UsefulCasts\Casts\Arrayed::class` - serializes/unserializes an array. If null, still returns an array.
- `RenokiCo\UsefulCasts\Casts\EncryptedArray::class` - encrypts/decrypts and serializes/unserializes an array. If null, it gets encrypted as empty

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
