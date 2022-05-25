<?php

namespace Database;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class ReservationCreationTest extends TestCase
{

    use RefreshDatabase;

    public function test_reservation_creation()
    {
        $this->assertDatabaseCount('bookings',1);
    }

}

