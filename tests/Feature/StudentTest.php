<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StudentTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testStudentDashboard()
    {
        $this->withoutMiddleware();
        $response = $this->get('/student/dashboard');

        $response->assertStatus(200);
    }
}
