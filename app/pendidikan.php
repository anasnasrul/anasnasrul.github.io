<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pendidikan extends Model
{	
    protected $table = 'pendidikan';

    protected $fillable = ['nama_sekolah','alamat','jurusan','periode','status','ipk'];

    protected $dates = ['created_at', 'updated_at'];
}
