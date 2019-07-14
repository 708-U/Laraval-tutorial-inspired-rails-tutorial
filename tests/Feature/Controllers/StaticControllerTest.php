<?php

namespace Tests\Feature\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StaticControllerTest extends TestCase
{
    /** @var string */
    private $expected_title;

    protected function setUp(): void
    {
        parent::setUp();
        $this->expected_title = '| Laravel Tutorial Sample App';
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertRedirect('/home');
    }

    /**
     * @test
     *
     * @return void
     */
    public function shouldGetHome()
    {
        $response = $this->get('/home');

        $response->assertOk()
            ->assertSee('Home ' . $this->expected_title);
    }

    /**
     * @test
     *
     * @return void
     */
    public function shouldGetHelp()
    {
        $response = $this->get('/help');

        $response->assertOk()
            ->assertSee('Help ' . $this->expected_title);
    }

    /**
     * @test
     *
     * @return void
     */
    public function shouldGetAbout()
    {
        $response = $this->get('/about');

        $response->assertOk()
            ->assertSee('About ' . $this->expected_title);
    }

    /**
     * @test
     *
     * @return void
     */
    public function shouldGetContent()
    {
        $response = $this->get('/content');

        $response->assertOk()
            ->assertSee('Content ' . $this->expected_title);
    }
}
