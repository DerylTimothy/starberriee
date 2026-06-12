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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');                         // Nama perhiasan / beads
            $table->string('slug')->unique()->nullable();   // Jalur URL aman (contoh: gelang-manik-maroon)
            $table->text('description')->nullable();        // Deskripsi detail produk
            $table->integer('price');                       // Harga produk
            $table->integer('stock')->default(10);          // Stok barang otomatis default isi 10
            $table->string('image')->nullable();            // Nama file foto produk
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};