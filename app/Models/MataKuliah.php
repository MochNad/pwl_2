<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    protected $table = 'matakuliah';

    public function mahasiswa_matakuliah()
    {
        return $this->hasMany(Mahasiswa_MataKuliah::class,'mahasiswa_id','id');
    }
}
