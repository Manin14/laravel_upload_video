<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataVideo extends Model
{
    //
    protected $table = 'tabel_video'; 
    protected $primaryKey = 'id_video';

    protected $fillable = ['id_video','keterangan','file'];

    public $timestamps = false;
}
