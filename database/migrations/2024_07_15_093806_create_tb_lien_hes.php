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
        Schema::create('tb_lien_hes', function (Blueprint $table) {
            $table->id();
            $table->text('noi_dung');
            $table->string('username');
            $table->string('email')->unique();
            $table->integer('dien_thoai');
            $table->string('ten_khach_hang');
            $table->unsignedInteger('id_san_pham');
            $table->string('loai_dich_vu');
            $table->enum('trang_thai', ['chưa liên hệ', 'đã liên hệ lần 1', 'đã liên hệ lần 2', 'hoàn thành']); 
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_lien_hes');
    }
};
