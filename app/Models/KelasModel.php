<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasModel extends Model
{
    protected $table = 'tabel_kelas';
    //    protected $fillable = ['id', 'fakultas', 'prodi', 'kelas', 'isi'];
       protected $fillable = ['fakultas', 'prodi', 'kelas', 'isi'];
}
