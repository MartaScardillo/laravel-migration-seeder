<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 10; $i++) {
            Train::create([
                'company' => $faker->company,
                'departure_station' => $faker->city,
                'arrival_station' => $faker->city,
                'departure_date' => $faker->date,
                'departure_time' => $faker->time,
                'arrival_time' => $faker->time,
                'train_code' => $faker->unique()->ean8,
                'num_coaches' => $faker->numberBetween(1,10),
                'on_schedule' => $faker->boolean,
                'canceled' => $faker->boolean,
            ]);
        }
    }
}
