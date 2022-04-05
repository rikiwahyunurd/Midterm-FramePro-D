<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(4)->create();

        Category::create([
            'name'=>'Diabetes',
            'slug'=>'diabetes'
        ]);

        Category::create([
            'name'=>'Lack of Sleep',
            'slug'=>'lack-of-sleep'
        ]);

        Category::create([
            'name'=>'Insomnia',
            'slug'=>'insomnia'
        ]);

        Post::factory(20)->create();

    }
}
