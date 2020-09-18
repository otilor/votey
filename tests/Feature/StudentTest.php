<?php

namespace Tests\Feature;

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
