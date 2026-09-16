<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $fillable = ['name', 'birth_date', 'species_id', 'user_id'];

    public function species()
    {
        return $this->belongsTo(Species::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function notes()
    {
        return $this->morphMany(Note::class, 'noteable');
    }
}
