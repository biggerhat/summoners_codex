<?php

namespace Database\Factories;

use App\Models\Attribute;
use App\Models\Card;
use App\Models\Set;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Character>
 */
class CharacterFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
        return [
            "name" => fake()->name(),
            "set_id" => Set::factory(),
            "initiative" => fake()->numberBetween(1, 100),
            "health" => fake()->numberBetween(4,12),
            "hand_size" => fake()->numberBetween(1,3),
            "victory_points" => fake()->numberBetween(4, 10),
            "movement" => 2,
            "action" => 2,
            "skills" => fake()->sentences(3, true),
            "constant_ability" => fake()->sentences(3, true),
            "upgrade_ability" => fake()->sentences(3, true),
            "upgrade_wind" => fake()->numberBetween(0, 2),
            "upgrade_shell" => fake()->numberBetween(0, 2),
            "upgrade_fire" => fake()->numberBetween(0, 2),
            "upgrade_heart" => fake()->numberBetween(0, 2),
        ];
    }
}
