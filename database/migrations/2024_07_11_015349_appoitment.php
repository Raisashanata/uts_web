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
        Schema::create('appoitment', function (Blueprint $table) {
            $table->id();
            $table->text('nama_pasien');
            $table->text('nama_dokter');
            $table->text('spesialis');
            $table->date('tanggal');
            $table->time('jam');
            $table->text('keluhan');
            $table->text('harga');
            $table->text('obat');
            $table->text('total');
            $table->timestamp('failed_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
