<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = ['name'];

    public function words()
    {
        return $this->hasMany(Word::class);
    }

    public function phrases()
    {
        return $this->hasMany(Phrase::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_language');
    }
}
