<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserPos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Untuk membuat datav dummy pada database agar dapat melakukan pengetesan leveling akses middleware
        $user = [
            [
                'name' => 'Fahrizal Wira Ananda',
                'username' => 'rizale',
                'password' => bcrypt('1234'),
                'email' => 'rizale@gmail.com',
                'alamat' => 'Jogja',
                'level' => 1,
                'telepon' => '0812160127121602',
                'gender' => 'Laki-Laki',
                'foto' => 'asjdhk.png',
                'ttl' => '2003-01-02',
                'status' => 'Active'
                
            ],

            [
                'name' => 'Petugas Kasir',
                'username' => 'kasir',
                'password' => bcrypt('123'),
                'email' => 'jonn@gmail.com',
                'alamat' => 'Jogja',
                'level' => 2,
                'telepon' => '0832160127121601',
                'gender' => 'Laki-Laki',
                'foto' => 'asjdhk.png',
                'ttl' => '2003-01-02',
                'status' => 'Active'
            ],
            
        ];
        foreach ($user as $key => $value){
            User::create($value);
        }
    }
}
