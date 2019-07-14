<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void23
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('nama_produk', '50');
            $table->string('rasa', '20');
            $table->integer('harga');
            $table->text('gambar');
            $table->enum('status',['1', '0']);
            $table->string('created_by', '20')->nullable();
            $table->string('updated_by', '20')->nullable();
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
        Schema::dropIfExists('produks');
    }
}
