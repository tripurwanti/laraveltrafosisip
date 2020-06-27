<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('proposals', function (Blueprint $table) {
            //Schema::enableForeignKeyConstraints();
            $table->bigIncrements('id');
            $table->string('lokasi');
            $table->string('exist');
            $table->string('koordinat_exist');
            $table->string('status');
            //$table->date('tgl_usulan');
            $table->float('jml_gangguan' , 8, 2);
            $table->string('unit_id')->nullable();
            $table->foreign('unit_id')
                    ->references('id')
                    ->on('units');
            $table->date('tgl_pelaksanaan');
            $table->date('tgl_selesai');
            $table->string('bukti_uid');
            $table->string('bukti_kontrak');
            $table->string('bukti_kemajuan');
            $table->string('bast1');
            $table->string('bast2');
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
        Schema::dropIfExists('proposals');
    }
}
