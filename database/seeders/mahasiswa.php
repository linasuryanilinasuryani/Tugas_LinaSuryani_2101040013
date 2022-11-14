<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class mahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahasiswa =[
        'nim' => '2101040013',
        'nama' => 'Lina Suryani',
        'jurusan' => 'RPL',
        'prodi' => 'S1 RPL',
        'created_at' => new \DateTime,
        'updated_at' => null
        ];
        //
        \DB::table('table_mahasiswa')->insert($mahasiswa);
    }
}
