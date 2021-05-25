<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use Database\Factories\CourseFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CourseControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */
    public function controller_displays_the_form_to_create_a_new_course()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get(route('courses.create'));
        $response->assertStatus(200);
        $response->assertViewIs('courses.create');
    }
    /** @test */
    public function controller_stores_created_courses()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post(route('courses.store'), [
            'name' => 'Name Test',
            'description' => 'description test',
        ]);
        $response->assertRedirect(route('home'));
        $this->assertDatabaseHas('courses', [
            'name' => 'Name Test',
            'description' => 'description test'
        ]);
    }
    /** @test */
    public function store_displays_validation_errors()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post(route('courses.store'), []);
        $response->assertStatus(302);
        $response->assertSessionHasErrors(['name', 'description']);
    }
    /** @test */
    public function controller_returns_correct_courses_list_view()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get(route('courses.index'));
        $response->assertStatus(200);
        $response->assertViewIs('courses.index');
    }
    /** @test */
    public function controller_shows_courses_created_list()
    {
        $user = User::factory()->create();
        $course = Course::factory()->create();
        $response = $this->actingAs($user)->get(route('courses.index'));
        $response->assertViewHasAll([
            'name' => $course->name,
            'description' => $course->description,
        ]);
    }

}
