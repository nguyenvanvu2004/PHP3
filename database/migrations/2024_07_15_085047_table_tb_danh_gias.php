<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_danh_gias', function (Blueprint $table) {
            $table->id('id_danh_gia', 11);
            $table->text('noi_dung');
            $table->date('ngay_them');
            $table->boolean('path');
            $table->id('id_san_pham')->unique();
            $table->boolean('username')->unique();
            $table->double('so_sao');
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
