<?php

namespace RenokiCo\UsefulCasts\Test;

class EncryptedArrayTest extends TestCase
{
    public function test_stored_null_retrieves_as_array()
    {
        $restaurant = factory(Models\Restaurant::class)->create();

        $restaurant->update([
            'encrypted_menu' => null,
        ]);

        $this->assertTrue(is_array($restaurant->encrypted_menu));
    }

    public function test_stored_array_retrieves_as_array()
    {
        $restaurant = factory(Models\Restaurant::class)->create();

        $restaurant->update([
            'encrypted_menu' => [],
        ]);

        $this->assertTrue(is_array($restaurant->encrypted_menu));
    }
}
