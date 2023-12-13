<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    \App\Models\Train::create([
        'company' => 'Banana',
        'departure_station' => 'Fagiolini',
        'arrival_station' => 'Broccoletti',
        'departure_date' => '2023-12-13',
        'departure_time' => '08:00:00',
        'arrival_time' => '10:30:00',
        'train_code' => 'ehg5egr',
        'num_coaches' => 5,
        'on_schedule' => true,
        'canceled' => false,
    ]);

    \App\Models\Train::create([
        'company' => 'Pera',
        'departure_station' => 'Carne',
        'arrival_station' => 'Patate',
        'departure_date' => '2023-12-12',
        'departure_time' => '09:30:00',
        'arrival_time' => '12:00:00',
        'train_code' => 'etbeb34',
        'num_coaches' => 8,
        'on_schedule' => true,
        'canceled' => false,
    ]);

    \App\Models\Train::create([
        'company' => 'Mango',
        'departure_station' => 'Patate',
        'arrival_station' => 'Fagiolini',
        'departure_date' => '2024-12-13',
        'departure_time' => '12:00:00',
        'arrival_time' => '15:45:00',
        'train_code' => '5g334ct',
        'num_coaches' => 6,
        'on_schedule' => true,
        'canceled' => false,
    ]);

    \App\Models\Train::create([
        'company' => 'Mela',
        'departure_station' => 'Broccoletti',
        'arrival_station' => 'Cavolfiore',
        'departure_date' => '2023-10-13',
        'departure_time' => '14:30:00',
        'arrival_time' => '17:15:00',
        'train_code' => '5tv3t',
        'num_coaches' => 7,
        'on_schedule' => false,
        'canceled' => false,
    ]);

    \App\Models\Train::create([
        'company' => 'Banana',
        'departure_station' => 'Cavolfiore',
        'arrival_station' => 'Carne',
        'departure_date' => '2023-12-13',
        'departure_time' => '18:00:00',
        'arrival_time' => '20:30:00',
        'train_code' => 'c3t3434r4',
        'num_coaches' => 4,
        'on_schedule' => false,
        'canceled' => false,
    ]);

}
}
