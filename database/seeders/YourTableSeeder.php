<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YourTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('about_pages')->insert([
          [
            'title' => 'Value 1',
            'body' => 'Value 2',
            'created_at' => now(),
            'updated_at' => now(),
          ],
          [
            'title' => 'Value 1',
            'body' => 'Value 2',
            'created_at' => now(),
            'updated_at' => now(),
          ],
          [
            'title' => 'Value 1',
            'body' => 'Value 2',
            'created_at' => now(),
            'updated_at' => now(),
          ],
        ]);

        DB::table('books')->insert([
          [
            'title' => 'Value 1',
            'author' => 'Value 2',
            'description' => 'Value 3',
            'image' => 'Value 4',
            'link' => 'Value 6',
            'created_at' => now(),
            'updated_at' => now(),
          ],
          [
            'title' => 'Value 1',
            'author' => 'Value 2',
            'description' => 'Value 3',
            'image' => 'Value 4',
            'link' => 'Value 5',
            'created_at' => now(),
            'updated_at' => now(),
          ],
          [
            'title' => 'Value 1',
            'author' => 'Value 2',
            'description' => 'Value 3',
            'image' => 'Value 4',
            'link' => 'Value 8',
            'created_at' => now(),
            'updated_at' => now(),
          ],
        ]);
    }
}