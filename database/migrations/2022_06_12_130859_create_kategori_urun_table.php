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
        Schema::create('kategori_uruns', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('kategori_id');
        $table->unsignedBigInteger('urun_id');

        $table->foreign('kategori_id')->references('id')->on('kategoris')->onDelete('cascade');
        $table->foreign('urun_id')->references('id')->on('uruns')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategori_urun');
    }
};
