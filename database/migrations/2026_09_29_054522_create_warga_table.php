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
        Schema::create('warga', function (Blueprint $table) {
            $table->id();

            $table->foreignId('keluarga_id')->constrained('keluarga')->onDelete('cascade');

            $table->string('nama', 100);
            $table->string('nik', 20)->unique();

            $table->string('tempat_lahir', 100)->nullable();
            $table->date('tanggal_lahir')->nullable();

            $table->enum('jenis_kelamin', [
                'Laki-laki',
                'Perempuan'
            ])->nullable();

            $table->string('agama', 30)->nullable();
            $table->string('no_hp', 20)->nullable();

            $table->text('alamat')->nullable();

            $table->enum('status_nikah', [
                'Belum Menikah',
                'Menikah'
            ])->nullable();

            $table->string('hubungan_keluarga', 30)->nullable();

            $table->enum('asal_warga', [
                'Asli Ciburuy',
                'Pendatang'
            ])->nullable();

            $table->string('asal_daerah', 100)->nullable();
            $table->year('tahun_mulai_tinggal')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warga');
    }
};
