<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Vote;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VoteControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */
    public function controller_stores_created_votes()
    {
        $response = $this->post(route('votes.store'), [
            'election' => 'Name Test',
        ]);
        $response->assertRedirect('/voted');
        $this->assertDatabaseHas('votes', [
            'election' => 'Name Test',
        ]);
    }
    /** @test */
    public function controller_returns_correct_voted_list_view()
    {
        $response = $this->get(route('votes.index'));
        $response->assertStatus(200);
        $response->assertViewIs('votes.index');
    }
}
