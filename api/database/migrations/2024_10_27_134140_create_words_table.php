<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('words', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('word_id');
            $table->string('word')->index();
            $table->unsignedBigInteger('language_id');
            $table->unsignedBigInteger('word_category_id');
            $table->unsignedBigInteger('word_subcategory_id')->nullable();
            $table->timestamps();

            $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
            $table->foreign('word_category_id')->references('id')->on('word_categories')->onDelete('cascade');
            $table->foreign('word_subcategory_id')->references('id')->on('word_subcategories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('words');
    }
};
