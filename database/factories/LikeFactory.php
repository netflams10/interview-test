<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Like>
 */
class LikeFactory extends Factory
{
    public function get_post_id()
    {
        $array = [];
        $like_exists = \App\Models\Like::all();
        foreach ($like_exists as $exists) {
            array_push($array, $exists->post_id);
        }
        $post_id = \App\Models\Post::all()->except($array)->random()->id;
        if (\App\Models\Like::where('post_id', $post_id)->exists()) {
            $this->get_post_id();
        }
        return $post_id;
    }
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post_id'    => $this->get_post_id(),
            'likes'      => $this->faker->randomDigit(),
        ];
    }
}
