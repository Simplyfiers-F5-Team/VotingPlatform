<?php

namespace Tests\Feature\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */

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
