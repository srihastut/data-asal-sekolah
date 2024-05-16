<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis extends Model
{
    protected $table ="jenis";
    protected $primaryKey="id";
    protected $fillable=['id','jenis'];
    use HasFactory;

    public function data_asal_sekolah()
    {
        return $this->hasMany(data_asal_sekolah::class, 'jenis_asal_sekolah', 'id');
    }
}