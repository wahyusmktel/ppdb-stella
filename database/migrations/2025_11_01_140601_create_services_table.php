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
        // Ini akan membuat tabel 'services'
        Schema::create('services', function (Blueprint $table) {
            $table->id(); // Kolom ID (Primary Key)
            $table->string('title'); // Kolom untuk Judul (misal: "Digital Payments")
            $table->text('description'); // Kolom untuk Deskripsi

            // Kolom untuk menyimpan KODE SVG ikon-nya
            // Kita pakai 'text' karena kode SVG bisa sangat panjang
            $table->text('icon_svg');

            $table->string('link_url')->default('#'); // Kolom for "Read more" link

            // Kolom untuk menentukan urutan tampil
            $table->integer('order')->default(0);

            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
