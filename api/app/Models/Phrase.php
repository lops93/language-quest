<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phrase extends Model
{
    protected $fillable = ['phrase', 'language_id', 'phrase_category_id'];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function category()
    {
        return $this->belongsTo(PhraseCategory::class, 'phrase_category_id');
    }

    public function favoritedByUsers()
    {
        return $this->morphToMany(User::class, 'favoritable', 'favorites');
    }
}
