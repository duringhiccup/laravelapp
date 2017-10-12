<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class homestay extends Model
{
    //
    //protected $table = 'homestays';
   //
    protected $primaryKey ='id';
    //protected $timestaps=false;

    protected $fillable = [
    	
    		'nama',
    		'notelp',
    		'alamat'

    ];

    public function homestay_transaksi()
    {
        # code...
        return $this->hasMany('App\pengguna');
    }

}
