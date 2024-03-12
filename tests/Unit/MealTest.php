<?php

// tests/Unit/MealTest.php

namespace Tests\Unit;

use App\Models\Meal;
use App\Models\User;
use App\Models\Recipe;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MealTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_belongs_to_a_user()
    {
        $meal = Meal::factory()->create(); // Make sure you've set up model factories.
        $this->assertInstanceOf(User::class, $meal->user);
    }

    /** @test */
    public function it_has_many_recipes()
    {
        $meal = Meal::factory()->create();

        // Create two recipes for the meal
        $recipes = Recipe::factory()->count(2)->create(['meal_id' => $meal->id]);

        // Assert the meal has two recipes
        $this->assertEquals(2, $meal->recipes->count());
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $meal->recipes);
    }
}
