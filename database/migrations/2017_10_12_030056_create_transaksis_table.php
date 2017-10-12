<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pengguna')->unsigned();
            $table->integer('id_homestay')->unsigned();
            $table->integer('harga');
            $table->timestamps();

             $table->foreign('id_pengguna')->references('id')->on('penggunas');

                 $table->foreign('id_homestay')->references('id')->on('homestays');
        });

        //'id_pengguna',
        //'id_homestay',
       // 'harga'

        
        /*Schema::table('transaksis', function (Blueprint $table) {

             $table->foreign('id_pengguna')->references('id')->on('penggunas');

                 $table->foreign('id_homestay')->references('id')->on('homestays');
        });*/



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}

/*
 public function pengguna_transaksi(){
    return this->belongsToMany('App\pengguna');
    }

      public function transaksi_homestay(){
    return this->belongsToMany('App\homestay');
    }
*/