<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'description', 'price'];

    protected $casts = [
        'price' => 'decimal:2',
    ];

    public function appointments()
    {
        return $this->belongsToMany(Appointment::class, 'appointment_service');
    }
}
