<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ElectionTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testElectionDashboard()
    {
        $this->withoutMiddleware();
        $response = $this->get('/admin/election/dashboard');

        $response->assertStatus(200);
    }
}
