<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_asal_sekolah extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table ="data_asal_sekolah";
    protected $fillable=['kode_asal_sekolah','nama_asal_sekolah','deskripsi','kota_asal_sekolah','provinsi_asal_sekolah'];
}
