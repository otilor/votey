<?php

namespace Tests\Feature;

use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testLogin()
    {
//        fn () => $this->flushSession(); // Flushes the session
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
