<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRegister()
    {
        $faker = \Faker\Factory::create();
        $data = [
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => 'password',
            'password_confirmation' => 'password',
        ];

        $response = $this->withHeaders(['X-Header' => 'Value',])->json('POST', '/register', $data);
        $response->assertStatus(201);
    }
}
