<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client; // atau App\Client tergantung struktur direktori Anda

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        foreach (range(1, 30) as $index) {
            Client::create([
                'name' => $faker->name,
                'phone' => $faker->phoneNumber,
                'email' => $faker->unique()->safeEmail,
                'subject' => $faker->sentence,
                'message' => $faker->paragraph,
            ]);
        }
    }
}
