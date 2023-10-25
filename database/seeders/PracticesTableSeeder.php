<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PracticesTableSeeder extends Seeder
{
    public function run()
    {
        // Jumlah data dummy yang ingin dibuat
        $numberOfPractices = 10;

        for ($i = 0; $i < $numberOfPractices; $i++) {
            DB::table('practices')->insert([
                'id' => Str::uuid(),
                'title' => 'Praktek Hukum ' . ($i + 1),
                'cover' => ($i + 1) . '.jpg',
                'text' => 'Deskripsi praktek hukum ' . ($i + 1) . ' ...',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
