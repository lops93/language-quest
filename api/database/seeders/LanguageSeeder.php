<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = [
            ['name' => 'English', 'original_name' => 'English'],
            ['name' => 'Portuguese', 'original_name' => 'Português'],
            ['name' => 'Norwegian', 'original_name' => 'Norsk'],
            ['name' => 'German', 'original_name' => 'Deutsch'],
            ['name' => 'Spanish', 'original_name' => 'Español'],
            ['name' => 'French', 'original_name' => 'Français'],
        ];

        DB::table('languages')->insert($languages);
    }
}
