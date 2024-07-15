<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DanhGiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('danh_gias')->insert([
                'id_danh_gia' => rand(1, 100),
                'noi_dung' => Str::random(10),
                'ngay_them' => now(),
                'id_san_pham' => rand(1, 1000),
                'username' => Str::random(10),
                'so_sao' => rand(1, 5),
            ]);
        }
    }
}
