<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TopicTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_the_application_returns_a_successful_response_torles()
    {
        $response = $this->get('/dashboard');

        $response->assertStatus(302);
    }
    public function test_the_application_returns_a_successful_response_foglalas()
    {
        $response = $this->get('/torles');

        $response->assertStatus(302);
    }
    public function test_the_application_returns_a_successful_response_rolunk()
    {
        $response = $this->get('/rolunk');

        $response->assertStatus(302);
    }
}
