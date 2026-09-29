<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Veterinarian extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'specialty', 'email', 'phone'];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
