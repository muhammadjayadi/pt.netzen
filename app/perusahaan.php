<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perusahaan extends Model
{
    protected $table ="perusahaans";
    protected $primaryKey='id';
    // protected $fillable=['nama_perusahaan','jenis_perusahaan','kontak','penawaran_id'];
    protected $fillable=['nama_perusahaan','jenis_perusahaan','kontak','user_id'];
    public function penawaran(){
        return $this->hasMany(Penawaran::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }


}