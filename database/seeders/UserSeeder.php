<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Reyga Marza Ramadhan',
            'email' => 'siswa@gmail.com',
            'password' => password_hash("siswa123", PASSWORD_DEFAULT),
            'role' => 'siswa',
        ]);

        User::create([
            'nama' => 'Operator',
            'email' => 'operator@gmail.com',
            'password' => password_hash("operator123", PASSWORD_DEFAULT),
            'role' => 'operator',
        ]);

        User::create([
            'nama' => 'Hanifah, S.Pd',
            'email' => 'kesiswaan@gmail.com',
            'password' => password_hash("kesiswaan123", PASSWORD_DEFAULT),
            'role' => 'kesiswaan',
        ]);

        User::create([
            'nama' => 'Ani Nuraeni, M.Kom',
            'email' => 'walikelas@gmail.com',
            'password' => password_hash("walikelas123", PASSWORD_DEFAULT),
            'role' => 'waliKelas',
        ]);

        User::create([
            'nama' => 'Yudi Fatir',
            'email' => 'walisiswa@gmail.com',
            'password' => password_hash("walisiswa123", PASSWORD_DEFAULT),
            'role' => 'waliSiswa',
        ]);
    }
}
