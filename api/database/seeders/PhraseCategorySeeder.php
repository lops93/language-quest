<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhraseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Greetings'],
            ['name' => 'Shopping'],
            ['name' => 'Travel'],
            ['name' => 'Weather'],
            ['name' => 'Food'],
            ['name' => 'Time'],
            ['name' => 'Money'],
            ['name' => 'Family'],
            ['name' => 'Relationships'],
            ['name' => 'Directions'],
            ['name' => 'Social'],
            ['name' => 'Business'],
            ['name' => 'Entertainment'],
            ['name' => 'Health'],
            ['name' => 'Emergency'],
            ['name' => 'Hospital'],
        ];

        DB::table('phrase_categories')->insert($categories);
    }
}
