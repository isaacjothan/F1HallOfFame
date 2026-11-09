<?php

namespace Database\Factories;

use App\Models\Championship;
use App\Models\Driver;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Championship>
 */
class ChampionshipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'driver_id' => Driver::factory(),
            'season' => fake()->unique()->numberBetween(1950, 2026),
            'constructor' => null,
            'wins' => null,
            'podiums' => null,
            'poles' => null,
        ];
    }
}
