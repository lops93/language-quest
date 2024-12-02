<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WordCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Noun'],
            ['name' => 'Verb'],
            ['name' => 'Adjective'],
            ['name' => 'Adverb'],
            ['name' => 'Pronoun'],
            ['name' => 'Preposition'],
            ['name' => 'Conjunction'],
            ['name' => 'Interjection'],
        ];

        DB::table('word_categories')->insert($categories);
    }
}
