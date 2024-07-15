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
        Schema::create('khach_hangs', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('password');
            $table->string('ten_khach_hang');
            $table->integer('dien_thoai');
            $table->string('email')->unique();
            $table->string('dia_chi');
            $table->string('quyen_han');
            $table->string('trang_thai');
            $table->string('option');
            $table->string('ma_xac_nhan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khach_hangs');
    }
};
