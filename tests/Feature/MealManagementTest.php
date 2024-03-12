<?php

// tests/Feature/MealManagementTest.php

namespace Tests\Feature;

use App\Models\Meal;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MealManagementTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_create_a_meal()
    {
        $this->actingAs(User::factory()->create());

        $response = $this->post('/meals', [
            'name' => 'Dinner',
            'description' => 'A delicious dinner meal',
        ]);

        $this->assertCount(1, Meal::all());
        $response->assertRedirect('/meals');
    }

    // Add tests for viewing, updating, and deleting meals
}

