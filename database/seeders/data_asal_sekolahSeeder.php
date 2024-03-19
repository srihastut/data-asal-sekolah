<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class data_asal_sekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('data_asal_sekolah')->insert([
            'kode_asal_sekolah'      => 20329841,
            'nama_asal_sekolah'      => 'SMK N 2 Tegal',
            'deskripsi'              => 'Jalan Wisanggeni No.1, Kejambon, Kec Tegal Timur,No. Telpon: 0283358279',
            'kota_asal_sekolah'      => 'Kota Tegal',
            'provinsi_asal_sekolah'  => 'Jawa Tengah',
            'created_at'             => date('Y-m-d H:i:s')
        ]);
        DB::table('data_asal_sekolah')->insert([
            'kode_asal_sekolah'      => 20329856,
            'nama_asal_sekolah'      => 'SMK N 1 Tegal',
            'deskripsi'              => 'Jalan Dr.Sutomo No.68, Pekauman, Kec Tegal Barat, Kode pos 52113',
            'kota_asal_sekolah'      => 'Kota Tegal',
            'provinsi_asal_sekolah'  => 'Jawa Tengah',
            'created_at'             => date('Y-m-d H:i:s')
        ]);
        DB::table('data_asal_sekolah')->insert([
            'kode_asal_sekolah'      => 20329858,
            'nama_asal_sekolah'      => 'SMK N 3 Tegal',
            'deskripsi'              => 'Jalan Gajahmada 72D, Jawa Tengah 52113, Nomor Telpon/kontak:(0283) 356081',
            'kota_asal_sekolah'      => 'Kota Tegal',
            'provinsi_asal_sekolah'  => 'Jawa Tengah',
            'created_at'             => date('Y-m-d H:i:s')
        ]);
        
    }
}
