<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Path to SQL file
        $sqlFile = database_path('seeders/database_backup.sql');

        // Read file contents
        $sql = File::get($sqlFile);

        // Execute SQL queries
        DB::unprepared($sql);

        $this->command->info('Database seeding completed successfully.');
    }
}
