<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{

    protected $fillable=['file','type','penawaran_id'];


    public function penawaran(){
        return $this->belongsTo(penawaran::class);
    }
}