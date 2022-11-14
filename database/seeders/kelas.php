<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class kelas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas =[
            'id' => '21',
            'fakultas' => 'Teknik dan Desain',
            'prodi' => 'S1 RPL',
            'kelas' => 'RPL',
            'isi' => '34',
            'created_at' => new \DateTime,
            'updated_at' => null
            ];
            //
            \DB::table('tabel_kelas')->insert($kelas);
        //
    }
}
