<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Livewire\Livewire;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function registration_page_contains_livewire_component()
    {
        $this->get(route('auth.register_inst'))
            ->assertSuccessful()
            ->assertSeeLivewire('auth.register_inst');
    }

    /** @test */
    public function can_register()
    {
        Livewire::test('auth.register')
            ->set('email', 'calebporzio@gmail.com')
            ->set('password', 'password')
            ->set('passwordConfirmation', 'password')
            ->call('register')
            ->assertRedirect('/');

        $this->assertTrue(User::whereEmail('calebporzio@gmail.com')->exists());
        $this->assertEquals('calebporzio@gmail.com', auth()->user()->email);
    }

    /** @test */
    public function email_is_required()
    {
        Livewire::test('auth.register')
            ->set('email', '')
            ->set('password', 'password')
            ->set('passwordConfirmation', 'password')
            ->call('register')
            ->assertHasErrors(['email' => 'required']);
    }

    /** @test */
    public function email_is_valid_email()
    {
        Livewire::test('auth.register')
            ->set('email', 'calebporzio')
            ->set('password', 'password')
            ->set('passwordConfirmation', 'password')
            ->call('register')
            ->assertHasErrors(['email' => 'email']);
    }

    /** @test */
    public function email_hasnt_been_taken_already()
    {
        User::create([
            'email' => 'calebporzio@gmail.com',
            'password' => Hash::make('password'),
        ]);

        Livewire::test('auth.register')
            ->set('email', 'calebporzio@gmail.com')
            ->set('password', 'password')
            ->set('passwordConfirmation', 'password')
            ->call('register')
            ->assertHasErrors(['email' => 'unique']);
    }

    /** @test */
    public function see_email_hasnt_already_been_taken_validation_message_as_user_types()
    {
        User::create([
            'email' => 'calebporzio@gmail.com',
            'password' => Hash::make('password'),
        ]);

        Livewire::test('auth.register')
            ->set('email', 'calebporzi@gmail.com')
            ->assertHasNoErrors()
            ->set('email', 'calebporzio@gmail.com')
            ->assertHasErrors(['email' => 'unique']);
    }

    /** @test */
    public function password_is_required()
    {
        Livewire::test('auth.register')
            ->set('email', 'calebporzio@gmail.com')
            ->set('password', '')
            ->set('passwordConfirmation', 'password')
            ->call('register')
            ->assertHasErrors(['password' => 'required']);
    }

    /** @test */
    public function password_is_minimum_of_six_characters()
    {
        Livewire::test('auth.register')
            ->set('email', 'calebporzio@gmail.com')
            ->set('password', 'secre')
            ->set('passwordConfirmation', 'password')
            ->call('register')
            ->assertHasErrors(['password' => 'min']);
    }

    /** @test */
    public function password_matches_password_confirmation()
    {
        Livewire::test('auth.register')
            ->set('email', 'calebporzio@gmail.com')
            ->set('password', 'password')
            ->set('passwordConfirmation', 'not-secret')
            ->call('register')
            ->assertHasErrors(['password' => 'same']);
    }
}
