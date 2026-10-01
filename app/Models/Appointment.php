<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use SoftDeletes;

    protected $fillable = ['pet_id', 'veterinarian_id', 'date', 'status'];

    protected $casts = [
        'date' => 'date',
    ];

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }

    public function veterinarian()
    {
        return $this->belongsTo(Veterinarian::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'appointment_service');
    }

    public function notes()
    {
        return $this->morphMany(Note::class, 'noteable');
    }
}
