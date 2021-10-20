<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // // \App\Models\User::factory(10)->create();
        User::create([
            'name'=>'test001',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123123123')
        ]);

        Post::create([
            'title' => 'post 1',
            'slug'=>'post1',
            'excerpt'=>'loremssssssssssss',
            'body' => 'aaaaa'
        ]);

        Post::create([
            'title' => 'post 2',
            'slug'=>'post2',
            'excerpt'=>'loremaaaaaaaaaaaa',
            'body' => 'bbbbbbbbb'
        ]);
    }
}
