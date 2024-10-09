<?php

namespace Database\Seeders;

use App\Models\VaccineCenter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VaccineCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $vaccineCenters[] = [
                'name' => fake()->company,
                'location' => fake()->address,
                'daily_limit' => random_int(50, 100),
            ];
        }

        foreach ($vaccineCenters as $vaccineCenter) {
            VaccineCenter::create($vaccineCenter);
        }
    }
}
