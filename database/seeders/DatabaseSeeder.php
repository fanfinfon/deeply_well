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
        $path = database_path('seeders/database_backup.sql');

        if (File::exists($path)) {
            DB::unprepared(File::get($path));
            $this->command->info('Database backup successfully imported!');
        } else {
            $this->command->error('SQL file not found: ' . $path);
        }
    }
}
