<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhraseCategory extends Model
{
    protected $fillable = ['name'];

    public function phrases()
    {
        return $this->hasMany(Phrase::class);
    }
}
