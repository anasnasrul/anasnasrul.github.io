<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class keterampilan extends Model
{
    protected $table = 'keterampilan';

    protected $fillable = ['nama','jenis','deskripsi'];

    protected $dates = ['created_at', 'updated_at'];
}
