<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Enkripsi kata sandi menggunakan bcrypt
        $password = bcrypt('adminadmin');

        // Tambahkan data pengguna ke dalam tabel 'users'
        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'admin@admin.com', // Sesuaikan dengan email yang Anda inginkan
            'password' => $password,
        ]);
    }
}
