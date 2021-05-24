<?php

namespace Tests\Feature\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Database\factories\UserFactory;
use Tests\TestCase;

class LoginControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */
    public function login_displays_the_login_form()
    {
        $response = $this->get(route('login'));
        $response->assertStatus(200);
        $response->assertViewIs('auth.login');
    }
    /** @test */
    public function login_displays_validation_errors()
    {
        $response = $this->post(route('login'), []);
        $response->assertStatus(302);
        $response->assertSessionHasErrors('email');
    }
    /** @test */
    public function login_authenticates_and_redirects_user()
    {
        $user = User::factory()->create();
        $response = $this->post(route('login'), [
            'email' => $user->email,
            'password' => 'password'
        ]);
        $response->assertRedirect(route('home'));
        $this->assertAuthenticatedAs($user);
    }
    /** @test */
    public function register_creates_and_authenticates_a_user()
    {        
        $response = $this->post(route('register'), [
            'name' => 'pepin',
            'email' => 'pepin@example.com',
            'password' => 'test1234',
            'password_confirmation' => 'test1234',
        ]);
        $response->assertRedirect(route('home'));
        $this->assertDatabaseHas('users', [
            'name' => 'pepin',
            'email' => 'pepin@example.com'
        ]);
    }

}
