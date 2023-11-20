<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataSetting extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('settings')->insert(
        [
            'id_setting' => 1,
            'nama_perusahaan' => 'SanggarPeni',
            'alamat' => 'Krebet rt 03, Krebet, Sendangsari, Kec. Pajangan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55751',
            'telepon' => '081234779987',
            'tipe_nota' => 1, // kecil
            'diskon' => 5,
            'path_logo' => 'logo.png',
            'path_kartu_member' => 'member.png',
        ]);
    }
}
