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
        Schema::create('program_pemerintah_pusats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('tahun_id')->constrained('tahuns')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('indikator_id')->constrained('indikators')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('kegiatan_id')->constrained('kegiatans')->onUpdate('cascade')->onDelete('cascade');
            $table->string('kode_rincianoutput')->nullable();
            $table->string('name_rincianoutput')->nullable();
            $table->string('satuan')->nullable();
            $table->float('target_tahun')->nullable();
            $table->float('realisasi_target_sem_1')->nullable();
            $table->float('realisasi_target_sem_2')->nullable();
            $table->float('alokasi_anggaran')->nullable();
            $table->float('realisasi_anggaran_sem_1')->nullable();
            $table->float('realisasi_anggaran_sem_2')->nullable();
            $table->string('lokasi_pelaksanaan_kegiatan')->nullable();
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
        Schema::dropIfExists('program_pemerintah_pusats');
    }
};
