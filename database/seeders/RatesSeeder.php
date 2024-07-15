<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('rates')->insert([
                'stars' => rand(1, 5),
                'stars' => rand(1, 5),
                'noi_dung' => Str::random(10),
                'date_rate' => now(),
                'ip_address' => Str::random(40),
            ]);
        }
    }
}
