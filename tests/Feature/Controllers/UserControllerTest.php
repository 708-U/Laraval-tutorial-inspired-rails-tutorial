<?php

namespace Tests\Feature\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserControllerTest extends TestCase
{
    /** @var string */
    private $expected_title;

    protected function setUp(): void
    {
        parent::setUp();
        $this->expected_title = '| Laravel Tutorial Sample App';
    }

    /**
     * @test
     *
     * @return void
     */
    public function shouldGetSignUp()
    {
        $response = $this->get('/signup');

        $response->assertOk()
            ->assertSee('Sign up ' . $this->expected_title);
    }
}
