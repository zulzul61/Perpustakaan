<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataUser = [
            [
                'name' => 'siJulpa',
                'email' => 'JulpaSiAdmin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('12345678'),
                'namaLengkap' => 'Admin',
                'alamat' => 'rumahku'
            ],
            [
                'name' => 'siJuju',
                'email' => 'JujuSiPetugas@gmail.com',
                'role' => 'petugas',
                'password' => bcrypt('12345678'),
                'namaLengkap' => 'Petugas',
                'alamat' => 'istanaku'

            ],
            [
                'name' => 'AsepOye',
                'email' => 'aAsep@gmail.com',
                'role' => 'peminjam',
                'password' => bcrypt('12345678'),
                'namaLengkap' => 'Asep Kasep',
                'alamat' => 'Jl. In aja dulu'
            ]
            ];

        foreach ($dataUser as $key => $value) {
            User::create($value);
        }
    }
}
