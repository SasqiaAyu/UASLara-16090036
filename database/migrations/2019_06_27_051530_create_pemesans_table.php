<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemesansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_customer')->unsigned();
            $table->integer('id_produk')->unsigned();
            $table->date('tanggal');
            $table->text('alamat');
            $table->string('no_hp', '15');
            $table->enum('konfirmasi',['1', '0']);
            $table->enum('status',['1', '0']);
            $table->string('created_by', '20')->nullable();
            $table->string('updated_by', '20')->nullable();
            $table->timestamps();

            $table->foreign('id_customer')->references('customers')->on('id')->onDelete('CASCADE');
             $table->foreign('id_produk')->references('produks')->on('id')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesans');
    }
}
