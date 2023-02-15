<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
        $gears = ["wind", "fire", "heart", "shell"];
        $rand = rand(0,3);

        return [
            "name" => fake()->name(),
            "gear" => $gears[$rand],
            "copies" => fake()->numberBetween(1, 4),
            "effect" => fake()->sentences(2, true),
        ];
    }
}
