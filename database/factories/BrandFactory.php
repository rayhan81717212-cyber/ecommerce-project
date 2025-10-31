<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(), 
            'logo' => 'uploads/brands/' . fake()->image('public/uploads/brands', 200, 200, null, false), 
            'description' => fake()->sentence(10), 
        ];

    }
}
