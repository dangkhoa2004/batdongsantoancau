<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Tiêu đề
            $table->string('images')->nullable(); // Ảnh
            $table->text('content'); // Nội dung
            $table->string('link'); // Đường dẫn
            $table->string('code'); // Mã tin
            $table->string('info'); // Thông tin
            $table->string('document_type'); // Loại giấy tờ
            $table->decimal('area_mb', 10, 2); // Diện tích MB (mặt bằng)
            $table->decimal('area_sd', 10, 2)->nullable(); // Diện tích SD (sử dụng)
            $table->decimal('width', 10, 2); // Chiều rộng
            $table->decimal('length', 10, 2); // Chiều dài
            $table->integer('floors'); // Số tầng
            $table->integer('bedrooms'); // Phòng ngủ
            $table->integer('bathrooms'); // Phòng toilet
            $table->bigInteger('price'); // Change this to bigInteger
            $table->string('direction'); // Hướng
            $table->string('feng_shui_direction'); // Hướng phong thủy
            $table->string('location'); // Nơi đăng
            $table->timestamp('posted_at'); // Thời gian đăng
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
