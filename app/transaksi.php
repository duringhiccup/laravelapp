<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    //

    protected $primaryKey = 'id';
    protected $timestamps = false;

    protected $fillable = [
    	'id_pengguna',
    	'id_homestay',
    	'harga'
    ];

     public function pengguna_transaksi(){
	return this->belongsToMany('App\pengguna');
	}

	  public function transaksi_homestay(){
	return this->belongsToMany('App\homestay');
	}
}
