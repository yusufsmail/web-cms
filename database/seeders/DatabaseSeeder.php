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
        User::create([
            'name' => 'yusuf',
            'username' => 'yusuf',
            'password' => '12121212',
            'email' => 'zeng@gmail.com'
        ]);


        User::factory(2)->create();

        Category::create([
            'name'=> 'Berita',
            'slug'=> 'berita'
        ]);
        Category::create([
            'name'=> 'Personal',
            'slug'=> 'personal'
        ]);
     }
}
 