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
        Schema::create('program_pemerintah_daerahs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('tahun_id')->constrained('tahuns')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('indikator_id')->nullable()->constrained('indikators')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('sub_kegiatan_id')->nullable()->constrained('sub_kegiatans')->onUpdate('cascade')->onDelete('cascade');
            $table->float('target_tahun')->nullable();
            $table->float('realisasi_target_sem_1')->nullable();
            $table->float('realisasi_target_sem_2')->nullable();
            $table->float('alokasi_anggaran')->nullable();
            $table->float('realisasi_anggaran_sem_1')->nullable();
            $table->float('realisasi_anggaran_sem_2')->nullable();
            $table->string('lokasi_pelaksanaan_kegiatan')->nullable();
            $table->string('sumber_pendanaan')->nullable();
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
        Schema::dropIfExists('program_pemerintah_daerahs');
    }
};
