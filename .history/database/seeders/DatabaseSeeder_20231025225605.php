<?php

namespace Database\Seeders;

use CategoryPostsTableSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PostsTableSeeder;
use PracticesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AboutTableSeeder::class);
        $this->call(CategoryPostsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(PracticesTableSeeder::class);
    }
}
