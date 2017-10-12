<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class saldo extends Model
{
    //
    protected $fillable = [
    	'id',
    	'id_pengguna',
    	'saldo'
    ];


	public function pengguna_saldo(){
	return this->belongsToMany('App\pengguna');
}

}
/*public function up()
    {
        Schema::create('saldos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pengguna');
            $table->integer('saldo');
            $table->timestamps();
        });
    }*/
