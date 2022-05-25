<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AuthenticationTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */

    //regisztrációhoz teszt
    /** @test */
    public function a_user_can_regist()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                ->type('name','Gabokako')
                ->type('email','gabokahagy@example.com')
                ->type('password','Gaboka.titok20')
                ->type('password_confirmation','Gaboka.titok20')
                ->press('Regisztráció')
                ->assertPathIs('/dashboard')
                ->assertSee('Foglalás');
        });
    }
    /** @test */
    public function a_user_can_login(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->type('email','gabokaNagy@example.com')
                ->type('password','Gaboka.titok20')
                ->press('Bejelentkezés')
                ->assertPathIs('/dashboard')
                ->assertSee('Foglalás');

        });
    }

}
