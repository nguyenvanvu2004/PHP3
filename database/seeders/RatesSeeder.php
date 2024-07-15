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
                'id' => rand(1, 100),
                'stars' => rand(1, 5), // Thường là từ 1 đến 5 cho đánh giá sao
                'noi_dung' => Str::random(10),
                'date_rate' => now(),
                'ip_address' => Str::random(40),
            ]);
        }
    }
}
