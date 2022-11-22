<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
use App\Models\News;
use App\Models\Podcast;
use App\Models\Role;
use App\Models\Track;
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
    /*    User::factory(10)->create();

         User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
         ]);
        News::factory(50)->create();
        Article::factory(50)->create();
       Podcast::factory(50)->create();
        Track::factory(50)->create();*/
        Role::factory(3)->create();

    }
}
