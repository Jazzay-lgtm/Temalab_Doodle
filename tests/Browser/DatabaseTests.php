<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DatabaseTests extends DuskTestCase
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
    public function reservation_creation_test(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                ->type('name','Teszt')
                ->type('email','tesztasssd@teszt.com')
                ->type('password','tesztelek')
                ->type('password_confirmation','tesztelek')
                ->press('Regisztráció')
                ->visit('/dashboard')
                ->press('Foglalás')
                ->assertSee('Sikeres foglalás');
        });
    }

    /** @test */
    public function reservation_deletion_test(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                ->type('name','Teszt')
                ->type('email','tesztvalami@teszt.com')
                ->type('password','tesztelek')
                ->type('password_confirmation','tesztelek')
                ->press('Regisztráció')
                ->visit('/dashboard')
                ->press('Foglalás')
                ->visit('/torles')
                ->press('Törlés')
                ->assertSee('Sikeres törlés');
        });
    }
}
