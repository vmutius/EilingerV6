<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use App\Notifications\VerifyEmail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\URL;
use Tests\TestCase;

class EmailVerificationTest extends TestCase
{
    use RefreshDatabase;

    protected string $verificationVerifyRouteName = 'verification.verify';

    protected function homeRoute(): string
    {
        return route('index', app()->getLocale());
    }
    protected function successfulVerificationRoute(): string
    {
        return route('user_dashboard', app()->getLocale()) . '?verified=1';
    }

    protected function verificationNoticeRoute(): string
    {
        return route('verification.notice', app()->getLocale());
    }

    protected function validVerificationVerifyRoute($user): string
    {
        return URL::signedRoute($this->verificationVerifyRouteName, [
            'locale' => app()->getLocale(),
            'id' => $user->id,
            'hash' => sha1($user->getEmailForVerification()),
        ]);
    }

    protected function invalidVerificationVerifyRoute($user): string
    {
        return route($this->verificationVerifyRouteName, [
            'locale' => app()->getLocale(),
            'id' => $user->id,
            'hash' => 'invalid-hash',
        ]);
    }

    protected function verificationResendRoute(): string
    {
        return route('verification.resend', app()->getLocale());
    }

    protected function loginRoute(): string
    {
        return route('login', app()->getLocale());
    }

    public function testGuestCannotSeeTheVerificationNotice()
    {
        $response = $this->get($this->verificationNoticeRoute());

        $response->assertRedirect($this->loginRoute());
    }

    public function testUserSeesTheVerificationNoticeWhenNotVerified()
    {
        $user = User::factory()->create([
            'email_verified_at' => null,
        ]);

        $response = $this->actingAs($user)->get($this->verificationNoticeRoute());

        $response->assertStatus(200);
        $response->assertViewIs('verification.notice');
    }

    public function testVerifiedUserIsRedirectedHomeWhenVisitingVerificationNoticeRoute()
    {
        $user = User::factory()->create([
            'email_verified_at' => now(),
        ]);

        $response = $this->actingAs($user)->get($this->verificationNoticeRoute());

        $response->assertRedirect($this->homeRoute());
    }

    public function testGuestCannotSeeTheVerificationVerifyRoute()
    {
        $user = User::factory()->create([
            'id' => 1,
            'email_verified_at' => null,
        ]);

        $response = $this->get($this->validVerificationVerifyRoute($user));

        $response->assertRedirect($this->loginRoute());
    }

    public function testUserCannotVerifyOthers()
    {
        $user = User::factory()->create([
            'id' => 1,
            'email_verified_at' => null,
        ]);

        $user2 = User::factory()->create(['id' => 2, 'email_verified_at' => null]);

        $response = $this->actingAs($user)->get($this->validVerificationVerifyRoute($user2));

        $response->assertForbidden();
        $this->assertFalse($user2->fresh()->hasVerifiedEmail());
    }

    public function testUserIsRedirectedToCorrectRouteWhenAlreadyVerified()
    {
        $user = User::factory()->create([
            'email_verified_at' => now(),
        ]);

        $response = $this->actingAs($user)->get($this->validVerificationVerifyRoute($user));

        $response->assertRedirect($this->successfulVerificationRoute());
    }

    public function testForbiddenIsReturnedWhenSignatureIsInvalidInVerificationVerifyRoute()
    {
        $user = User::factory()->create([
            'email_verified_at' => now(),
        ]);

        $response = $this->actingAs($user)->get($this->invalidVerificationVerifyRoute($user));

        $response->assertStatus(403);
    }

    public function testUserCanVerifyThemselves()
    {
        $user = User::factory()->create([
            'email_verified_at' => null,
        ]);

        $response = $this->actingAs($user)->get($this->validVerificationVerifyRoute($user));

        $response->assertRedirect($this->successfulVerificationRoute());
        $this->assertNotNull($user->fresh()->email_verified_at);
    }

    public function testGuestCannotResendAVerificationEmail()
    {
        $response = $this->post($this->verificationResendRoute());

        $response->assertRedirect($this->loginRoute());
    }

    public function testUserCanResendAVerificationEmail()
    {
        Notification::fake();
        $user = User::factory()->create([
            'email_verified_at' => null,
        ]);

        $response = $this->actingAs($user)
            ->from($this->verificationNoticeRoute())
            ->post($this->verificationResendRoute());

        Notification::assertSentTo($user, VerifyEmail::class);
        $response->assertRedirect($this->verificationNoticeRoute());
    }
}
