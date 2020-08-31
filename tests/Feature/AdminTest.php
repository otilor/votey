<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAdminDashboard()
    {
        $this->withoutMiddleware();
        $response = $this->get('/admin/dashboard');

        $response->assertStatus(200);
    }
}
