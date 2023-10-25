<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        $numberOfPosts = 10;
        for ($i = 0; $i < $numberOfPosts; $i++) {
            $category = DB::table('category_posts')->inRandomOrder()->first();
            DB::table('posts')->insert([
                'id' => Str::uuid(),
                'title' => 'Berita Hukum ' . ($i + 1),
                'cover' => 'path/to/cover/image' . ($i + 1) . '.jpg',
                'location' => 'Kantor Hukum ' . ($i + 1),
                'date' => Carbon::now(),
                'category_post_id' => $category->id,
                'text' => 'Isi berita hukum atau artikel ' . ($i + 1) . ' ...',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
