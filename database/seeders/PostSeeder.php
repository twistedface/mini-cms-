<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userIds = User::pluck('id')->all();
        $categoryIds = Category::pluck('id')->all();
        $tagIds = Tag::pluck('id')->all();

        $attachTags = fn (Post $post) => $post->tags()->attach(fake()->randomElements($tagIds, 2));

        Post::factory()->count(9)->published()->create([
            'user_id' => fn () => fake()->randomElement($userIds),
            'category_id' => fn () => fake()->randomElement($categoryIds),
        ])->each($attachTags);

        Post::factory()->count(3)->create([
            'user_id' => fn () => fake()->randomElement($userIds),
            'category_id' => fn () => fake()->randomElement($categoryIds),
        ])->each($attachTags);
    }
}
