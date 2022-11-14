<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalModel extends Model
{
    protected $table = 'tabel_soal';
    //    protected $fillable = ['nim', 'nama', 'jurusan', 'prodi'];
    protected $fillable = ['nama_mk', 'dosen', 'jumlah_soal', 'keterangan'];
}
