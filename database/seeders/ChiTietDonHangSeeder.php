<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Str;

class ChiTietDonHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('chi_tiet_don_hangs')->insert([
                'id_don_hang' => rand(1, 100), 
                'id_san_pham' => rand(1, 100), 
                'so_luong' => rand(1, 10000), 
                'tong_gia' => rand(100000, 999999), 

            ]);
    }
}
}
?>
