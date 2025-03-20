<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseBackupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sql = file_get_contents(database_path('seeders/database_backup.sql'));

        // Split SQL statements by semicolons
        $statements = array_filter(array_map('trim', explode(';', $sql)), 'strlen');

        foreach ($statements as $statement) {
            DB::unprepared($statement);
        }
    }
}