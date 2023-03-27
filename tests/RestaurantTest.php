<?php

namespace Tests;

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class RestaurantTest extends TestCase {
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_get_restaurants() {
        $response = $this->call('GET', '/api/restaurants?location=Kampala&term=Meza');

        $this->assertEquals(200, $response->status());
        $this->isJson();
    }

    public function test_get_restaurant_error_when_query_parameters_missing() {
        $response = $this->call('GET', '/api/restaurants');
        $this->assertEquals(422, $response->status());
    }

    public function test_get_restaurant_error_when_query_parameter_missing() {
        $response = $this->call('GET', '/api/restaurants?location=Kampala');
        $this->assertEquals(422, $response->status());
    }

    public function test_get_restaurant_details() {
        $response = $this->call('GET', '/api/restaurants/123');

        $this->assertEquals(200, $response->status());
        $this->isJson();
    }
}
