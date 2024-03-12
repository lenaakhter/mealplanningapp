<?php

// tests/Feature/MealRecipeIntegrationTest.php

namespace Tests\Feature;

use App\Models\Meal;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MealRecipeIntegrationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_recipe_can_be_added_to_a_meal()
    {
        $this->withoutExceptionHandling();

        $user = User::factory()->create();
        $this->actingAs($user);

        $meal = Meal::factory()->create(['user_id' => $user->id]);
        $recipe = Recipe::factory()->make();

        $this->post('/meals/'.$meal->id.'/recipes', $recipe->toArray());

        $this->assertEquals(1, $meal->recipes()->count());
    }
}

