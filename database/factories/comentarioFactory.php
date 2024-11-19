<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\comentario>
 */
class comentarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'descripcion' => $this->faker->paragraph(),
            'parent_id' => $this->faker->sentence(),
            'user_id' => $this->faker->sentence(),
            'post_id' => $this->faker->sentence()
        ];
    }
}
