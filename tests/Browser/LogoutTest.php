<?php

namespace Tests\Browser;


use App\Models\User;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use function factory;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LogoutTest extends DuskTestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * @throws \Throwable
     */
    public function test_logout()
    {
        parent::setUp();

        factory(User::class)->create([
            'email' => 'test@example.com',
        ]);

        $this->browse(function (Browser $browser) {
            $browser->visit('/logout')->logout();
        });

    }


}
