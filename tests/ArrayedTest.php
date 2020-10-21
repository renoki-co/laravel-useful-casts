<?php

namespace RenokiCo\UsefulCasts\Test;

class ArrayedTest extends TestCase
{
    public function test_stored_null_retrieves_as_array()
    {
        $restaurant = factory(Models\Restaurant::class)->create();

        $restaurant->update([
            'menu' => null,
        ]);

        $this->assertTrue(is_array($restaurant->menu));
    }

    public function test_stored_array_retrieves_as_array()
    {
        $restaurant = factory(Models\Restaurant::class)->create();

        $restaurant->update([
            'menu' => [],
        ]);

        $this->assertTrue(is_array($restaurant->menu));
    }
}
