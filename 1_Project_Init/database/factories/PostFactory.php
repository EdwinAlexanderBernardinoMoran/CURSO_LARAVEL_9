<?php

namespace Database\Factories;

// Clase para convertir una informacion en una URL.
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            // Fabrica de Post
            // 'user_id' => 1,
            // 'title' => $title = $this->faker->sentence(),
            // 'slug' => Str::slug($title),
            // 'body' => $this->faker->text(2200),

            'user_id' => User::all()->random()->id,
            'title' => $title = $this->faker->sentence(),
            'slug' => Str::slug($title),
            'body' => $this->faker->text(2200),
        ];
    }
}
