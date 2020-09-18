<?php

namespace Tests\Feature;

use Tests\TestCase;

class ContestantTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testContestantDashboard()
    {
        $this->withoutMiddleware();
        $response = $this->get('/contestant/dashboard');

        $response->assertStatus(200);
    }
}
