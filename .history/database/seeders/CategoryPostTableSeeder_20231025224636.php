<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryPostsTableSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            'Artikel Hukum',
            'Berita Terbaru',
            'Kasus Terkini',
            'Publikasi',
            'Kegiatan Advokat',
            'Pengumuman',
            'Wawasan Hukum',
            'Tinjauan Kasus'
        ];

        foreach ($categories as $category) {
            DB::table('category_posts')->insert([
                'id' => Str::uuid(),
                'name' => $category,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
