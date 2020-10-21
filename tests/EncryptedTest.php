<?php

namespace RenokiCo\UsefulCasts\Test;

class EncryptedTest extends TestCase
{
    public function test_stored_null_retrieves_as_null()
    {
        $restaurant = factory(Models\Restaurant::class)->create();

        $restaurant->update([
            'encrypted_name' => null,
        ]);

        $this->assertTrue(is_null($restaurant->encrypted_name));
    }

    public function test_stored_string_retrieves_as_string()
    {
        $restaurant = factory(Models\Restaurant::class)->create();

        $restaurant->update([
            'encrypted_name' => 'John',
        ]);

        $this->assertEquals('John', $restaurant->encrypted_name);
    }
}
