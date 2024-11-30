<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $fillable = ['word', 'language_id', 'word_category_id'];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function category()
    {
        return $this->belongsTo(WordCategory::class, 'word_category_id');
    }

    public function favoritedByUsers()
    {
        return $this->morphToMany(User::class, 'favoritable', 'favorites');
    }
}
