<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    //

    protected $fillable = [
    	'id',
    	'username',
    	'password'
    ];

    public function pengguna_transaksi(){
	return this->belongsToMany('App\transaksi');
	}

	public function pengguna_saldo(){
	return this->belongsToMany('App\saldo');
}
}

