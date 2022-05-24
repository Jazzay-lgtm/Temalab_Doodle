<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Laravel\Dusk\Browser;

class LogoutTest extends TestCase
{
    use RefreshDatabase;


    public function test_logout()
    {
        $user = User::factory()->create();
        $response = $this->post('/logout');

        $response->assertRedirect(route('login'));

    }
}
