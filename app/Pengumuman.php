<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table='artikel';

    	protected $fillable=[
    		'judul','isi','users_id','kategori_artikel_id'
    	];

    	protected $casts=[ ];
}
