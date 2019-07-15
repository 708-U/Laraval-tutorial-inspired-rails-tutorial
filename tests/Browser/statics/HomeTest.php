<?php

namespace Tests\Browser\statics;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class HomeTest extends DuskTestCase
{
    /**
     * @test
     *
     * @return void
     */
    public function visitAbout()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/home')
                ->assertSeeIn('@about_link', 'About')
                ->click('@about_link')
                ->assertPathIs('/about');
        });
    }

    /**
     * @test
     *
     * @return void
     */
    public function visitHelp()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/home')
                ->assertSeeIn('@help_link', 'Help')
                ->click('@help_link')
                ->assertPathIs('/help');
        });
    }

    /**
     * @test
     *
     * @return void
     */
    public function visitContact()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/home')
                ->assertSeeIn('@contact_link', 'Contact')
                ->click('@contact_link')
                ->assertPathIs('/contact');
        });
    }
}
