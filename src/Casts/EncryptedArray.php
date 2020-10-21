<?php

namespace RenokiCo\UsefulCasts\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class EncryptedArray implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return array
     */
    public function get($model, $key, $value, $attributes)
    {
        $decryptedValue = (new Encrypted)->get($model, $key, $value, $attributes);

        return (new Arrayed)->get($model, $key, $decryptedValue, $attributes);
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  array  $value
     * @param  array  $attributes
     * @return string
     */
    public function set($model, $key, $value, $attributes)
    {
        $array = (new Arrayed)->set($model, $key, $value, $attributes);

        return (new Encrypted)->set($model, $key, $array, $attributes);
    }
}
