<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_view_a_login_form()
    {
        $response = $this->get('de/login');

        $response->assertSuccessful();
        $response->assertViewIs('auth.login');
    }
    public function test_user_dashboard_shown_when_logged_in()
    {
        $user = User::factory()->create([
            'is_admin' => 0,
        ]);
        $response = $this->actingAs($user)->get('de/user/dashboard');

        $response->assertStatus(200);

    }

    public function test_admin_dashboard_shown_when_logged_in_as_admin()
    {
        $user = User::factory()->create([
            'is_admin' => 1,
        ]);
        $response = $this->actingAs($user)->get('de/admin/dashboard');

        $response->assertStatus(200);

    }
    public function test_user_can_login_with_correct_credentials()
    {
        $user = User::factory(User::class)->create([
            'password' => bcrypt($password = 'i-love-laravel'),
            'is_admin' => 0,
        ]);

        $response = $this->post('de/login', [
            'email' => $user->email,
            'password' => $password,
        ]);

        $response->assertRedirect('de/user/dashboard');
        $this->assertAuthenticatedAs($user);
    }
    public function test_user_cannot_login_with_incorrect_password()
    {
        $user = User::factory(User::class)->create([
            'password' => bcrypt('i-love-laravel'),
        ]);

        $response = $this->from('de/login')->post('de/login', [
            'email' => $user->email,
            'password' => 'invalid-password',
        ]);

        $response->assertRedirect('de/login');
        $response->assertSessionHasErrors('email');
        $this->assertTrue(session()->hasOldInput('email'));
        $this->assertFalse(session()->hasOldInput('password'));
        $this->assertGuest();
    }
}
