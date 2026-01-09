<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Stat;      // Mengimpor Model Stat
use App\Models\Mission;   // Mengimpor Model Mission

class OsisSeeder extends Seeder
{
    public function run()
    {
        // 1. MENGISI DATA STATISTIK (ANGKA)
        // Kita hapus dulu data lama agar tidak duplikat saat dijalankan ulang
        Stat::truncate(); 
        
        Stat::create(['label' => 'Total Anggota', 'target_count' => 55]);
        Stat::create(['label' => 'Total Sekbid', 'target_count' => 9]);

        // 2. MENGISI DATA MISI
        // Kita hapus dulu data lama
        Mission::truncate();

        Mission::create([
            'title' => 'Aktif & Kreatif',
            'description' => 'Mengembangkan bakat siswa melalui event sekolah yang seru.'
        ]);

        Mission::create([
            'title' => 'Solidaritas',
            'description' => 'Membangun komunikasi yang erat antar pengurus dan seluruh siswa.'
        ]);

        Mission::create([
            'title' => 'Disiplin',
            'description' => 'Menjadi teladan bagi siswa lain dalam hal tata tertib sekolah.'
        ]);
    }
}