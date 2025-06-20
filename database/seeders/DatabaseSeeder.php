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
        // Pastikan baris ini ada dan tidak dikomentari
        $this->call([
            RolePermissionSeeder::class,
        ]);
    }
}