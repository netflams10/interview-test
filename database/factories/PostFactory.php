<?php

namespace Database\Factories;

use App\Models\Like;
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
    public function definition(): array
    {
        return [
            'title'      => $this->faker->text(20),
            'article'     => $this->faker->text(200),
            'blog_id'    => \App\Models\Blog::all()->random()->id,
            'image' => $this->faker->imageUrl(),
        ];
    }

//    public function configure()
//    {
//        return $this->afterCreating(function (Post $post) {
//            Like::factory()->create(['post_id' => $post->id]);
//        });
//    }
}
