<?php

namespace Database\Seeders;

use App\Models\Anggota;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Anggota::create([
            "nama" => "Sopian Aji",
            "hp" => "08123456781",
        ]);
        Anggota::create([
            "nama" => "Husni Faqih",
            "hp" => "08123456782",
        ]);Anggota::create([
            "nama" => "Rousyati",
            "hp" => "08123456783",
        ]);
    }
}
