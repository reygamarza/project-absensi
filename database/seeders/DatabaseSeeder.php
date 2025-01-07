<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            // TenagaKependidikanSeeder::class,
            // LokasiSekolahSeeder::class,
            // WaktuPresensiSeeder::class,
            // JurusanSeeder::class,
            // KelasSeeder::class,
        ]);
    }
}
