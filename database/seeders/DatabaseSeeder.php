<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // Duta Janji
        Mahasiswa::create([
            'NIM' => '13321029',
            'nama' => 'Nafi Mulyo Kusumo',
        ]);
        Mahasiswa::create([
            'NIM' => '13321040',
            'nama' => 'Syarafina Ghassani Az Zahro',
        ]);
        Mahasiswa::create([
            'NIM' => '13321045',
            'nama' => 'Mohammad Ilham Hazetra',
        ]);
        Mahasiswa::create([
            'NIM' => '13321021',
            'nama' => 'Adelia Putri',
        ]);
    }
}
