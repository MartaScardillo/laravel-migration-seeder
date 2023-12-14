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
        $dates = [
            '2023-12-14',
            '2023-12-15',
            '2023-12-16',
            '2023-12-17',
            '2023-12-18',
            '2023-12-19',
            '2023-12-20',
            '2023-12-21',
            '2023-12-22',
            '2023-12-23',
        ];

        for ($i = 0; $i < 10; $i++) {
            Train::create([
                'company' => $faker->company,
                'departure_station' => $faker->city,
                'arrival_station' => $faker->city,
                'departure_date' => $dates[$i],
                'departure_time' => $faker->time,
                'arrival_time' => $faker->time,
                'train_code' => $faker->unique()->ean8,
                'num_coaches' => $faker->numberBetween(1,10),
                'on_schedule' => $faker->boolean(),
                'canceled' => $faker->boolean(),
            ]);
        }
    }
}
