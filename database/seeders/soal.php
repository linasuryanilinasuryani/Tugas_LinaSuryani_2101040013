<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Soal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $soal =[
            'id' => '21',
            'nama_mk' => 'Web lanjut',
            'dosen' => 'Fahrul Irfan, M.Kom',
            'jumlah_soal' => '20',
            'keterangan' => 'benar',
            'created_at' => new \DateTime,
            'updated_at' => null
            ];
            //
            \DB::table('tabel_soal')->insert($soal);
        //
    }
}
