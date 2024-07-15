<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DonhangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trangthai = ['đã nhận', 'chưa nhận'];

        for ($i = 0; $i < 10; $i++) {
            DB::table('don_hangs')->insert([
                'id_don_hang' => rand(1, 1000),
                'date' => now(),
                'tong_gia' => rand(10),
                'trang_thai' => $trangthai[array_rand($trangthai)],
                'phuong_thuc_tt' => Str::random(40),
                'ten_nguoi_mua' => Str::random(40),
                'dien_thoai' => rand(1000000, 9999999),
                'dia_chi' => Str::random(40),
                'username' => Str::random(10),
            ]);
        }
    }
}
