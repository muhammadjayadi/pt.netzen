<?php

namespace App;

use App\Http\Controllers\PerusahaanController;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Extension\Attributes\Node\Attributes;

class Penawaran extends Model
{
    protected $table ="penawarans";
    protected $primaryKey='id';
    // protected $ForeignKey='penawaran_id';
    protected $fillable=['jenis_koneksi','lokasi','site_a','site_b','bw','kontrak','monthly_bw','otc','perusahaan_id'];

    public function perusahaan(){
        return $this->belongsTo(perusahaan::class);
    }

    public function file(){
        return $this->hasOne(File::class);
    }

    public function identitas(){
        return $this->hasOne(Identitas::class);
    }




}