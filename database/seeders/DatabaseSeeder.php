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
            'name' => 'Nafi Mulyo Kusumo',
            'water_usage' => 10,
        ]);
        Mahasiswa::create([
            'NIM' => '13321040',
            'name' => 'Syarafina Ghassani Az Zahro',
            'water_usage' => 121,
        ]);
        Mahasiswa::create([
            'NIM' => '13321045',
            'name' => 'Mohammad Ilham Hazetra',
            'water_usage' => 12341,
        ]);
        Mahasiswa::create([
            'NIM' => '13321021',
            'name' => 'Adelia Putri',
            'water_usage' => 123,
        ]);
        Mahasiswa::create([
            'NIM' => '13321075',
            'name' => 'Carlios Eryan',
            'water_usage' => 123,
        ]);
        Mahasiswa::create([
            'NIM' => '13321005',
            'name' => 'Clara Caroline',
            'water_usage' => 123,
        ]);
        
    }
}
