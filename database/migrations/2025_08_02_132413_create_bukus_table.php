<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_buku');
            $table->string('penulis');
            $table->year('tahun_terbit');
            $table->string('penerbit');
            $table->enum('kategori', ['Pendidikan', 'Novel', 'Komik', 'Manga', 'Sains', 'Teknologi', 'Religi', 'Sejarah']);
            $table->string('cover')->nullable(); // untuk path file gambar (optional nullable)
            $table->string('file_pdf')->nullable(); // untuk path file pdf (optional nullable)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
