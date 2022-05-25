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

    /** @test */
    public function user_logout_test(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                ->type('name','Teszt')
                ->type('email','tettsjdtrszd@teszt.com')
                ->type('password','tesztelek')
                ->type('password_confirmation','tesztelek')
                ->press('Regisztráció')
                ->visit('/dashboard')
                ->visit('/logout')
                ->assertSee('Doodle');
        });
    }

}
