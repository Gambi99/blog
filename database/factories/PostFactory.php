<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{

    public function definition(): array
    {
        return [
            'title' => $this->faker->name(),
            'preview' => $this->faker->text(50),
            'description' => $this->faker->text(),
            'thumbnail' => '',
        ];
    }
}
