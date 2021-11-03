<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendapatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendapatans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sumber_id');
            $table->foreignId('kategori_id');
            $table->string('catatan');
            $table->foreignId('user_id');
            $table->timestamps();
        });
        // analisa penggunaan foreignId('sumber_id'); sebab terkadang pendapatan dibagi penyimpananya
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendapatans');
    }
}
