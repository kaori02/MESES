<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id("id_kelas");
            $table->string('judul');
            $table->string('abstraksi');
            $table->longText('body');
            $table->string('link');
            $table->string('images');
            $table->longText('imagesdesc');
            $table->longText('funfact');
            $table->string('kesimpulan1');
            $table->string('kesimpulan2');
            $table->longText('faq1');
            $table->longText('ans1');
            $table->longText('faq2');
            $table->longText('ans2');
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
        Schema::dropIfExists('kelas');
    }
}
