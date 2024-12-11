<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WordSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subcategories = [
            // Noun Subcategories
            ['name' => 'Object', 'word_category_id' => 1],
            ['name' => 'Nature', 'word_category_id' => 1],
            ['name' => 'Person', 'word_category_id' => 1],
            ['name' => 'Place', 'word_category_id' => 1],
            ['name' => 'Idea', 'word_category_id' => 1],
            ['name' => 'Animal', 'word_category_id' => 1],

            // Verb Subcategories
            ['name' => 'Action', 'word_category_id' => 2],
            ['name' => 'Emotion', 'word_category_id' => 2],
            ['name' => 'Movement', 'word_category_id' => 2],
            ['name' => 'Communication', 'word_category_id' => 2],
            ['name' => 'Creation', 'word_category_id' => 2],
            ['name' => 'Destruction', 'word_category_id' => 2],

            // Adjective Subcategories
            ['name' => 'Color', 'word_category_id' => 3],
            ['name' => 'Size', 'word_category_id' => 3],
            ['name' => 'Quality', 'word_category_id' => 3],
            ['name' => 'Condition', 'word_category_id' => 3],
            ['name' => 'Quantity', 'word_category_id' => 3],
            ['name' => 'Shape', 'word_category_id' => 3],

            // Adverb Subcategories
            ['name' => 'Time', 'word_category_id' => 4],
            ['name' => 'Place', 'word_category_id' => 4],
            ['name' => 'Manner', 'word_category_id' => 4],
            ['name' => 'Frequency', 'word_category_id' => 4],
            ['name' => 'Degree', 'word_category_id' => 4],

            // Pronoun Subcategories
            ['name' => 'Personal', 'word_category_id' => 5],
            ['name' => 'Possessive', 'word_category_id' => 5],
            ['name' => 'Demonstrative', 'word_category_id' => 5],
            ['name' => 'Interrogative', 'word_category_id' => 5],
            ['name' => 'Reflexive', 'word_category_id' => 5],

            // Preposition Subcategories
            ['name' => 'Spatial', 'word_category_id' => 6],
            ['name' => 'Temporal', 'word_category_id' => 6],
            ['name' => 'Causal', 'word_category_id' => 6],
            ['name' => 'Directional', 'word_category_id' => 6],

            // Conjunction Subcategories
            ['name' => 'Coordinating', 'word_category_id' => 7],
            ['name' => 'Subordinating', 'word_category_id' => 7],
            ['name' => 'Correlative', 'word_category_id' => 7],

            // Interjection Subcategories
            ['name' => 'Emotion', 'word_category_id' => 8],
            ['name' => 'Surprise', 'word_category_id' => 8],
            ['name' => 'Agreement', 'word_category_id' => 8],
            ['name' => 'Disagreement', 'word_category_id' => 8],
        ];

        DB::table('word_subcategories')->insert($subcategories);
    }
}
