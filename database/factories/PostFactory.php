<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      $title = $this->faker->sentence($nbWords = 3);
      $slug = Str::slug($title, '-');

        return [
            'title' => $title,
            'slug' => $slug,
            'user_id' => \App\Models\User::all()->random()->id,
            'content' => $this->faker->paragraph,
        ];
    }
}
