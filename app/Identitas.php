<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Identitas extends Model
{
    protected $fillable=['ktp_direktur','ktp_finance','npwp','akta','penawaran_id'];

    public function penawaran(){
        return $this->belongsTo(Penawaran::class);
    }
}
