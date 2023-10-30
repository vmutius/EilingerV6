<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthTest extends TestCase
{
    use RefreshDatabase;
    public function test_user_dashboard_shown_when_logged_in()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('de/user/dashboard');

        $response->assertStatus(200);
        
    }
}
