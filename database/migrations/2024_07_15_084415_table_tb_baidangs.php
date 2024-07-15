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
        Schema::create('tb_baidang', function (Blueprint $table) {
            $table->id('id_bai_dang');
            $table->text('tieu_de');
            $table->text('noi_dung');
            $table->date('ngay_dang');
            $table->boolean('path');
            $table->boolean('username')->unique();
            $table->double('trang_thai');
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
