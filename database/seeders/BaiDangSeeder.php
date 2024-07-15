<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BaiDangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('bai_dangs')->insert([
                'id_bai_dang' => rand(1, 100),
                'tieu_de' => Str::random(40), // Sửa Str::(40) thành Str::random(40)
                'noi_dung' => Str::random(10),
                'ngay_dang' => now(),
                'path' => Str::random(40),
                'username' => Str::random(40), // Sửa Str::(40) thành Str::random(40)
                'trang_thai' => rand(1, 5),
            ]);
        }
    }
}
