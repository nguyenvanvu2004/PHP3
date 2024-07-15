<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**git push -u origin main

     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_donhang', function (Blueprint $table) {
            $table->id('id_donhang');
            $table->date('ngay_dat');
            $table->double('11');git push -u origin main

            $table->boolean('trang_thai');
            $table->boolean('phuong_thuc_tt');
            $table->text('ten_nguoi_mua');
            $table->double('11');
            $table->double('dia_chi');
            $table->text('username')->unique();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
