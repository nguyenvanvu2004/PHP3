<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Str;

class KhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trangthai = ['đã nhận', 'chưa nhận'];
        
        for ($i = 0; $i < 10; $i++) {
            DB::table('khach_hangs')->insert([
                'username' => Str::random(10),
                'password' => Hash::make(Str::random(10)), 
                'ten_khach_hang' => Str::random(10),
                'dien_thoai' => rand(1000000, 9999999), 
                'email' => Str::random(10) . '@example.com', 
                'dia_chi' => Str::random(40),
                'quyen_han' => Str::random(40), 
                'trang_thai' => $trangthai[array_rand($trangthai)], 
                'option' => Str::random(10),
                'ma_xac_nhan' => rand(1000, 9999), 
            ]);
        }
    }
}
