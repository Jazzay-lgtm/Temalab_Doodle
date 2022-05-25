<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PasswordResetTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Doodle');
        });
    }

    /** @test */
    public function password_reset_test(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                ->type('name','Teszt')
                ->type('email','valakkkivagyok@teszt.com')
                ->type('password','tesztelek')
                ->type('password_confirmation','tesztelek')
                ->press('Regisztráció')
                ->visit('/forgot-password')
                ->type('passmail','valakkkivagyok@teszt.com')
                ->press('passreset')
                ->assertSee('Elküldtük a jelszó visszallító linket');
        });
    }
}
