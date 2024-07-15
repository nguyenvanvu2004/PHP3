<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LienHeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dichvu = ['Tốt', 'Không Tốt', 'Dịch vụ vip']; 
        $trangthai=['chưa liên hệ', 'đã liên hệ lần 1', 'đã liên hệ lần 2', 'hoàn thành'];

        for ($i = 0; $i < 10; $i++) {
            DB::table('tb_lien_hes')->insert([
                'noi_dung' => Str::random(100),
                'username' => Str::random(10),
                'email' => Str::random(10) . '@example.com',
                'dien_thoai' => rand(1000000, 9999999), 
                'ten_khach_hang' => Str::random(15), 
                'id_san_pham' => rand(1, 100), 
                'loai_dich_vu' => $dichvu[array_rand($dichvu)], 
                'loai_dich_vu' => $trangthai[array_rand($trangthai)], 
                'date' => now(), 
            ]);
        }
    }
}
