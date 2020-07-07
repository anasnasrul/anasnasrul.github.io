<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $table = 'training';

    protected $fillable = ['nama','penyedia','lokasi','periode','status','deskripsi'];

    protected $dates = ['created_at', 'updated_at'];
}
