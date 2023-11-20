<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataMember extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = [
            [
                'name' => 'Bayu Widi L',
                'username' => 'Bayu',
                'tgl_lahir' => '2002-11-01',
                'jk' => 'Laki-Laki',
                'email' => 'bayu@gmail.com', 
                'telpon' => '087689765432',
                'provinsi' => 'Jawa Tengah',
                'kabupaten' => 'Wonosobo',
                'kecamatan' => 'Wonosobo',
                'kode_pos' => '12349',
                'alamat_lengkap' => 'Wonosobo, Jawa Tengah, 387462',
                'foto' => 'foto1.png'
                
            ],

            [
                'name' => 'Fahrizal Wira A',
                'username' => 'Fahrizal',
                'tgl_lahir' => '2002-06-19',
                'jk' => 'Laki-Laki',
                'email' => 'fahrizal@gmail.com', 
                'telpon' => '087689763451',
                'provinsi' => 'Daerah Istimewa Yogyakarta',
                'kabupaten' => 'Kulon Progo',
                'kecamatan' => 'Kokap',
                'kode_pos' => '55653',
                'alamat_lengkap' => 'Kokap, Kulon Progo, DIY, 5653',
                'foto' => 'foto2.png'

            ],
            
        ];
        foreach ($user as $key => $value){
            Member::create($value);
        }
    }
}
