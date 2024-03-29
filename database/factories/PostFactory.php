<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Faker\Core\File;
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

            'title' => $this->faker->sentence,
            'excerpt' => $this->faker->paragraph(4),
            'slug' => $this->faker->slug,
            'thumbnail' => implode(asset(""), ['thumbnails/illustration-1.png']),
            'body' => $this->faker->paragraph(8),
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
        ];
    }
}
