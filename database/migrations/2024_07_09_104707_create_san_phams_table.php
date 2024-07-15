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
        Schema::create('san_phams', function (Blueprint $table) {
            $table->id();
            $table->string('hinh_anh')->nullable(); 
            // chỉ dinh truong vo gia tri null
            $table->string('ma_san_pham')->unique();
            // unique: chỉ định giá trị trong trường dữ liệu không được trùng nhau 
            $table->string('ten_san_pham');
            $table->double('gia', 10, 2);
            $table->unsignedInteger('so_luong');
            $table->unsignedInteger('danh_muc_id');

            //unsignedInteger: số nguyên dương
            $table->date('ngay_nhap');
            $table->text('mo_ta')->nullable();
            $table->boolean('trang_thai')->default(true);
            //default: xét giá trị mặc định
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_phams');
    }
};
