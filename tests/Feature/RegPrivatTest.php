<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegPrivatTest extends TestCase {
    use RefreshDatabase;

    public function test_register_as_private_person()
    {
        $response = $this->get('de/register-privat');
        $response->assertStatus(200);

        $response = $this->post('de/register-privat', [
            'type' => 'privat',
            'firstname' => 'Max',
            'lastname' => 'Muster',
            'email' => '',
            ]);
        $response->assertStatus(302);
    }
}
