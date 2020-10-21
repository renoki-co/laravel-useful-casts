<?php
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

use Illuminate\Support\Str;

$factory->define(\RenokiCo\UsefulCasts\Test\Models\Restaurant::class, function () {
    return [
        'name' => 'Name'.Str::random(5),
        'encrypted_name' => null,
        'menu' => [],
        'encrypted_menu' => null,
    ];
});
