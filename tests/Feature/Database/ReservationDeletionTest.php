<?php

namespace Database;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class ReservationDeletionTest extends TestCase
{

    use RefreshDatabase;

    public function test_reservation_deletion()
    {
        $this->assertDatabaseCount('bookings',0);
    }

}

