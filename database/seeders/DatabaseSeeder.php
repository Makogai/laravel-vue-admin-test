<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::factory(10)->create();

        User::factory(20)->create()->each(function($user) use ($categories){
             Post::factory(rand(1,10))->create([
                 'user_id' => $user->id
             ])->each(function($post) use ($categories){
                //  PostCategory::factory()
                $post->categories()->attach($categories->random(2));
             });
        });
    }
}
