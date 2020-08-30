<?php

namespace Tests\Feature;

use App\Console\Commands\TestUniqueUser;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
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
