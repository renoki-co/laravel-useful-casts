<?php

namespace RenokiCo\UsefulCasts\Test\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
        'name', 'encrypted_name',
        'menu', 'encrypted_menu',
    ];

    protected $casts = [
        'encrypted_name' => \RenokiCo\UsefulCasts\Casts\Encrypted::class,
        'menu' => \RenokiCo\UsefulCasts\Casts\Arrayed::class,
        'encrypted_menu' => \RenokiCo\UsefulCasts\Casts\EncryptedArray::class,
    ];
}
