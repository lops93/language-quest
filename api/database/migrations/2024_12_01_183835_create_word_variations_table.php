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
        Schema::create('word_variations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('word_id');
            $table->string('variation');
            $table->enum('gender', ['masculine', 'feminine', 'neutral'])->nullable();
            $table->enum('number', ['singular', 'plural'])->nullable();
            $table->enum('tense', ['past', 'present', 'future'])->nullable();
            $table->tinyInteger('person')->nullable();
            $table->enum('mood', ['indicative', 'subjunctive', 'imperative'])->nullable();
            $table->timestamps();

            $table->foreign('word_id')->references('id')->on('words')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('word_variations');
    }
};
