<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\Dispense;

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
        ]);
        Mahasiswa::create([
            'NIM' => '13321040',
            'name' => 'Syarafina Ghassani Az Zahro',
        ]);
        Mahasiswa::create([
            'NIM' => '13321045',
            'name' => 'Mohammad Ilham Hazetra',
        ]);
        Mahasiswa::create([
            'NIM' => '13321021',
            'name' => 'Adelia Putri',
        ]);
        Mahasiswa::create([
            'NIM' => '13321075',
            'name' => 'Carlios Eryan',
        ]);
        Mahasiswa::create([
            'NIM' => '13321005',
            'name' => 'Clara Caroline',
        ]);
        Dispense::create([
            'NIM' => '13321029',
            'water_usage' => 10,
        ]);
        Dispense::create([
            'NIM' => '13321040',
            'water_usage' => 121,
        ]);
        Dispense::create([
            'NIM' => '13321045',
            'water_usage' => 12341,
        ]);
        Dispense::create([
            'NIM' => '13321029',
            'water_usage' => 21,
        ]);
        Dispense::create([
            'NIM' => '13321029',
            'water_usage' => 13,
        ]);
    }
}
