<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
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
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Ahfaz Gafara',
            'email' => 'ahfazgafara86@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis reprehenderit omnis explicabo cupiditate necessitatibus aspernatur, quae odit commodi sint, eos voluptatibus et reiciendis alias laboriosam repudiandae.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis reprehenderit omnis explicabo cupiditate necessitatibus aspernatur, quae odit commodi sint, eos voluptatibus et reiciendis alias laboriosam repudiandae.Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis reprehenderit omnis explicabo cupiditate necessitatibus aspernatur, quae odit commodi sint, eos voluptatibus et reiciendis alias laboriosam repudiandae.',
            'category_id' => 1,
            'user_id' => 1
        ]);
        
        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis reprehenderit omnis explicabo cupiditate necessitatibus aspernatur, quae odit commodi sint, eos voluptatibus et reiciendis alias laboriosam repudiandae.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis reprehenderit omnis explicabo cupiditate necessitatibus aspernatur, quae odit commodi sint, eos voluptatibus et reiciendis alias laboriosam repudiandae.Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis reprehenderit omnis explicabo cupiditate necessitatibus aspernatur, quae odit commodi sint, eos voluptatibus et reiciendis alias laboriosam repudiandae.',
            'category_id' => 1,
            'user_id' => 1
        ]);
        
        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis reprehenderit omnis explicabo cupiditate necessitatibus aspernatur, quae odit commodi sint, eos voluptatibus et reiciendis alias laboriosam repudiandae.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis reprehenderit omnis explicabo cupiditate necessitatibus aspernatur, quae odit commodi sint, eos voluptatibus et reiciendis alias laboriosam repudiandae.Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis reprehenderit omnis explicabo cupiditate necessitatibus aspernatur, quae odit commodi sint, eos voluptatibus et reiciendis alias laboriosam repudiandae.',
            'category_id' => 2,
            'user_id' => 1
        ]);
        
        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis reprehenderit omnis explicabo cupiditate necessitatibus aspernatur, quae odit commodi sint, eos voluptatibus et reiciendis alias laboriosam repudiandae.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis reprehenderit omnis explicabo cupiditate necessitatibus aspernatur, quae odit commodi sint, eos voluptatibus et reiciendis alias laboriosam repudiandae.Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis reprehenderit omnis explicabo cupiditate necessitatibus aspernatur, quae odit commodi sint, eos voluptatibus et reiciendis alias laboriosam repudiandae.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
