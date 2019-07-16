<?php

namespace Tests\Browser\statics;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Facebook\WebDriver\WebDriverBy;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class HomeTest extends DuskTestCase
{
    /** @var array Links in Header */
    private $links = [
        'About', 'Help', 'Contact',
    ];

    /**
     * @test
     *
     * @return void
     */
    public function visitLinksFromHome()
    {
        $this->browse(function (Browser $browser) {
            $tileSuffix = ' | Laravel Tutorial Sample App';
            foreach ($this->links as $link) {
                $browser->visit('/home')
                    ->assertTitle('Home' . $tileSuffix)
                    ->assertSeeLink($link)
                    ->clickLink($link)
                    ->assertTitle($link . $tileSuffix)
                    ->assertPathIs('/' . mb_strtolower($link));
            }
        });
    }
}
