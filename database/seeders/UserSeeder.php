<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'PakGuru',
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password123')
        ]);
        DB::table('users')->insert([
            'name' => 'Andi Saputra',
            'role' => 'siswa',
            'siswa_id' => 1,
            'email' => 'andi@gmail.com',
            'password' => bcrypt('password123')
        ]);
        DB::table('users')->insert([
            'name' => 'Budi Cahya',
            'role' => 'siswa',
            'siswa_id' => 2,
            'email' => 'budi@gmail.com',
            'password' => bcrypt('password123')
        ]);
    }
}
