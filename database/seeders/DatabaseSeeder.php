<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\Category;
use \App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Category::truncate();

        User::factory(3)->create();
        $user = User::first();
        $c1 = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        $c2 = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);
        $c3 = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        $post1 = Post::create([
            'title' => 'My Family Post',
            'slug' => 'my-first-post',
            'body' => 'lorem ipsum sole rety okt',
            'user_id' => $user->id,
            'category_id' => $c2->id
        ]);

        $post2 = Post::create([
            'title' => 'My Work Post',
            'slug' => 'my-second-post',
            'body' => 'lorem ipsum sole rety okt',
            'user_id' => $user->id,
            'category_id' => $c3->id
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
