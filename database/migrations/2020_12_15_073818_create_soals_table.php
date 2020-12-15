<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soals', function (Blueprint $table) {
            $table->id("id_soal");
            $table->string('cover_image');
            $table->longText('body_soal');
            $table->string('a');
            $table->string('b');
            $table->string('c');
            $table->string('d');
            $table->string('jawaban');
            $table->timestamps();

            $table->unsignedBigInteger('kategori_id');
            $table->foreign('kategori_id')->references('id_kategori')->on('kategori_soal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('soals');
    }
}
