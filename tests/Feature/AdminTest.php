<?php

namespace Tests\Feature;

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
        $response = $this->get(route('admin.dashboard'));

        $response->assertStatus(200);
    }
}
