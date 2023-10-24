<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
    public function run()
    {
        About::create([
            'description' => 'Description',
            'year' => 2012,
            'image1' => 'image1',
            'image2' => 'image2',
            'vission' => 'Vission',
            'mission' => 'Mission',
            'completed_case' => 120,
        ]);
    }
}
